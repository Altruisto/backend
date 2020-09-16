<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command\Awin;

use App\Entity\Cause\Cause;
use App\Entity\Partner\Partner;
use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use App\Manager\Cause\CauseManager;
use App\Manager\Partner\PartnerManager;
use App\Manager\Transaction\TransactionManager;
use App\Manager\User\UserManager;
use App\Utils\Awin\AwinClient;
use DateTime;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DownloadAwinTransactionsCommand
 */
class DownloadAwinTransactionsCommand extends Command
{
    /**
     * @var AwinClient
     */
    private $awinManager;

    /**
     * @var TransactionManager
     */
    private $transactionManager;

    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * @var CauseManager
     */
    private $causeManager;

    /**
     * @var PartnerManager
     */
    private $partnerManager;

    /**
     * DownloadAwinTransactionsCommand constructor.
     *
     * @param AwinClient         $awinManager
     * @param TransactionManager $transactionManager
     * @param UserManager        $userManager
     * @param CauseManager       $causeManager
     * @param PartnerManager     $partnerManager
     */
    public function __construct(AwinClient $awinManager, TransactionManager $transactionManager, UserManager $userManager, CauseManager $causeManager, PartnerManager $partnerManager)
    {
        parent::__construct();
        $this->awinManager = $awinManager;
        $this->transactionManager = $transactionManager;
        $this->userManager = $userManager;
        $this->causeManager = $causeManager;
        $this->partnerManager = $partnerManager;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('altruisto:download-awin-transactions')
            ->addArgument('startDate', InputArgument::OPTIONAL)
            ->addArgument('endDate', InputArgument::OPTIONAL)
            ->addArgument('transactionStatus', InputArgument::OPTIONAL)
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $startDate = new DateTime($input->getArgument('startDate') ?? 'today - 30 DAYS');
        $endDate = new DateTime($input->getArgument('endDate') ?? 'today');


        $transactionStatus = $input->getArgument('transactionStatus');
        if ($transactionStatus) {
            $awinTransactions = $this->awinManager->getTransactions($startDate, $endDate, $transactionStatus);
        } else {
            $awinPendingTransactions = $this->awinManager->getTransactions($startDate, $endDate, AwinClient::TRANSACTION_STATUS_PENDING);
            $awinApprovedTransactions = $this->awinManager->getTransactions($startDate, $endDate, AwinClient::TRANSACTION_STATUS_APPROVED);
            $awinTransactions = array_merge($awinPendingTransactions, $awinApprovedTransactions);
        }

        foreach ($awinTransactions as $awinTransaction) {
            if (null !== $this->transactionManager->findOneBy(['externalId' => $awinTransaction['id'], 'network' => Transaction::NETWORK_AWIN ])) {
                continue; // Do not save existing transaction
            }

            $sid = explode("-", $awinTransaction['clickRefs']['clickRef']);

            if (3 !== count($sid)) {
                $user = null;
                /** @var array $causes */
                $causes =  $this->causeManager->findAll();
                $cause = $causes[0];
                $referredBy = null;
            } else {
                list($ref, $cause, $referredBy) = $sid;

                /** @var User $user */
                $user = $this->userManager->findOneBy(['ref' => $ref]);

                /** @var Cause $cause */
                $cause = $this->causeManager->findOneBy(['cause' => $cause]);

                if (null !== $cause) {
                    $cause = $this->causeManager->findOneBy(['cause' => 'extreme_poverty']);
                }
            }

            $transaction = $this->transactionManager->create();
            $transaction->setExternalId($awinTransaction['id']);
            $transaction->setNetwork(Transaction::NETWORK_AWIN);
            /** @var Partner $partner */
            $partner = $this->partnerManager->findOneBy(['externalAffiliationId' => $awinTransaction['advertiserId']]);

            $transaction->setPartner($partner);
            $transaction->setStatus($awinTransaction['commissionStatus']);
            $transaction->setCommissionAmount($awinTransaction['commissionAmount']['amount']*100);
            $transaction->setCommissionCurrency($awinTransaction['commissionAmount']['currency']);
            $transaction->setSaleAmount($awinTransaction['saleAmount']['amount']*100);
            $transaction->setSaleCurrency($awinTransaction['saleAmount']['currency']);
            $transaction->setCustomerCountryCode($awinTransaction['customerCountry']);
            $transaction->setTransactionDate(new DateTime($awinTransaction['transactionDate']));
            $transaction->setUser($user);
            $transaction->setTracker($awinTransaction['clickRefs']['clickRef']);
            $transaction->setReferredBy($referredBy);
            $transaction->setCause($cause);
            $transaction->setResponseContent($awinTransaction);

            $this->transactionManager->save($transaction);
            $output->writeln(sprintf('<info>Transaction saved (external_id: %s)</info>', $transaction->getExternalId()));
        }
    }
}

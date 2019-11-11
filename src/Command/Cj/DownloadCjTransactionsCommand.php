<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command\Cj;

use App\Entity\Cause\Cause;
use App\Entity\Partner\Partner;
use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use App\Manager\Cause\CauseManager;
use App\Manager\Partner\PartnerManager;
use App\Manager\Transaction\TransactionManager;
use App\Manager\User\UserManager;
use App\Utils\Cj\CjClient;
use DateTime;
use Doctrine\Common\Collections\Collection;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DownloadCjTransactionsCommand
 */
class DownloadCjTransactionsCommand extends Command
{
    /**
     * @var CjClient
     */
    private $cjClient;

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
     * DownloadCjTransactionsCommand constructor.
     *
     * @param CjClient           $cjClient
     * @param TransactionManager $transactionManager
     * @param UserManager        $userManager
     * @param CauseManager       $causeManager
     * @param PartnerManager     $partnerManager
     */
    public function __construct(CjClient $cjClient, TransactionManager $transactionManager, UserManager $userManager, CauseManager $causeManager, PartnerManager $partnerManager)
    {
        parent::__construct();
        $this->cjClient = $cjClient;
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
            ->setName('altruisto:download-cj-transactions')
            ->addArgument('startDate', InputArgument::REQUIRED)
            ->addArgument('endDate', InputArgument::REQUIRED)
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
        $startDate = new DateTime($input->getArgument('startDate'));
        $endDate = new DateTime($input->getArgument('endDate'));

        $transactionStatus = $input->getArgument('transactionStatus');

        if (!$transactionStatus) {
            $transactionStatus = CjClient::TRANSACTION_STATUS_POSTING;
        }

        $cjTransactions = $this->cjClient->getTransactions($startDate, $endDate, $transactionStatus);

        foreach ($cjTransactions as $cjTransaction) {
            if (null !== $this->transactionManager->findOneBy(['externalId' => $cjTransaction['commissionId'], 'network' => Transaction::NETWORK_CJ ])) {
                continue; // Do not save existing transaction
            }

            $sid = explode("-", $cjTransaction['sid']);

            if (3 !== count($sid)) {
                $user = null;
                /** @var array $causes */
                $causes =  $this->causeManager->findAll();
                $cause = $causes[0];
                $ref = null;
            } else {
                list($userId, $causeId, $ref) = $sid;

                /** @var User $user */
                $user = $this->userManager->find($userId);

                /** @var Cause $cause */
                $cause = $this->causeManager->find($causeId);
            }

            /** @var Partner $partner */
            $partner = $this->partnerManager->findOneBy(['externalAffiliationId' => $cjTransaction['advertiserId']]);

            $transaction = $this->transactionManager->create();
            $transaction->setPartner($partner);
            $transaction->setExternalId($cjTransaction['commissionId']);
            $transaction->setNetwork(Transaction::NETWORK_CJ);
            $transaction->setStatus($cjTransaction['actionStatus']);
            $transaction->setCommissionAmount($cjTransaction['pubCommissionAmountPubCurrency']*100);
            $transaction->setCommissionCurrency('EUR');
            $transaction->setSaleAmount($cjTransaction['saleAmountPubCurrency']*100);
            $transaction->setTracker($cjTransaction['shopperId']);
            $transaction->setRef($ref);
            $transaction->setSaleCurrency('EUR');
            $transaction->setCustomerCountryCode($cjTransaction['country']);
            $transaction->setTransactionDate(new DateTime($cjTransaction['eventDate']));
            $transaction->setUser($user);
            $transaction->setCause($cause);
            $transaction->setResponseContent($cjTransaction);

            $this->transactionManager->save($transaction);
            $output->writeln(sprintf('<info>Transaction saved (external_id: %s)</info>', $transaction->getExternalId()));
        }
    }
}

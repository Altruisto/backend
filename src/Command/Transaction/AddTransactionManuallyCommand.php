<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command\Transaction;

use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use App\Event\Security\ResetPasswordRequestEvent;
use App\Form\Command\Transaction\TransactionType;
use App\Manager\Cause\CauseManager;
use App\Manager\Transaction\TransactionManager;
use App\Manager\User\UserManager;
use Exception;
use Matthias\SymfonyConsoleForm\Console\Helper\FormHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class AddTransactionManuallyCommand
 */
class AddTransactionManuallyCommand extends Command
{
    /**
     * @var TransactionManager
     */
    private $transactionManager;

    /**
     * @var CauseManager
     */
    private $causeManager;

    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * AddTransactionManuallyCommand constructor.
     *
     * @param TransactionManager       $transactionManager
     * @param CauseManager             $causeManager
     * @param UserManager              $userManager
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(TransactionManager $transactionManager, CauseManager $causeManager, UserManager $userManager, EventDispatcherInterface $eventDispatcher)
    {
        parent::__construct();
        $this->transactionManager = $transactionManager;
        $this->causeManager = $causeManager;
        $this->userManager = $userManager;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('altruisto:add-transaction')
            ->setDescription('Manually add transaction to database')
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
        $user = new User();
        $this->eventDispatcher->dispatch(ResetPasswordRequestEvent::NAME, new ResetPasswordRequestEvent($user));

        die;
        /** @var FormHelper $formHelper */
        $formHelper = $this->getHelper('form');
        $formData = $formHelper->interactUsingForm(new TransactionType(), $input, $output);

        $transaction = new Transaction();
        $transaction->setExternalId($formData['external_id']);
        $transaction->setStatus($formData['status']);
        $transaction->setNetwork($formData['network']);
        $transaction->setCommissionAmount($formData['commission_amount']);
        $transaction->setCommissionCurrency($formData['commission_currency']);
        $transaction->setSaleAmount($formData['sale_amount']);
        $transaction->setSaleCurrency($formData['sale_currency']);
        $transaction->setCustomerCountryCode($formData['customer_country_code']);
        $transaction->setTracker($formData['tracker']);
        $transaction->setReferredBy($formData['referredBy']);
        $transaction->setTransactionDate($formData['transaction_date']);
        $transaction->setCause($formData['cause']);
        $transaction->setUser($formData['user']);
        $transaction->setPartner($formData['partner']);

        $this->transactionManager->save($transaction);

        $output->writeln(array(
            '<info>Transaction added</info></>',
            '',
        ));
    }
}

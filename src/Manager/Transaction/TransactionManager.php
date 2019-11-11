<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\Transaction;

use App\Entity\Transaction\Transaction;
use App\Event\Transaction\TransactionSaveEvent;
use App\Repository\Transaction\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class TransactionManager
 */
class TransactionManager extends TransactionRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * TransactionManager constructor.
     *
     * @param RegistryInterface        $registry
     * @param EntityManagerInterface   $entityManager
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager, EventDispatcherInterface $eventDispatcher)
    {
        parent::__construct($registry);
        $this->entityManager = $entityManager;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @return Transaction
     */
    public function create(): Transaction
    {
        return new Transaction();
    }

    /**
     * @param Transaction $transaction
     *
     * @return void
     */
    public function save(Transaction $transaction)
    {
        $this->entityManager->persist($transaction);
        $this->entityManager->flush();

        $this->eventDispatcher->dispatch(TransactionSaveEvent::NAME, new TransactionSaveEvent($transaction));
    }

    /**
     * @param Transaction $transaction
     *
     * @return void
     */
    public function delete(Transaction $transaction)
    {
        $this->entityManager->remove($transaction);
        $this->entityManager->flush();
    }
}

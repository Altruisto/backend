<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\User;

use App\Entity\User\User;
use App\Manager\Transaction\TransactionManager;
use App\Repository\User\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class UserManager
 */
class UserManager extends UserRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var TransactionManager
     */
    private $transactionManager;

    /**
     * UserManager constructor.
     *
     * @param RegistryInterface      $registry
     * @param EntityManagerInterface $entityManager
     * @param TransactionManager     $transactionManager
     */
    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager, TransactionManager $transactionManager)
    {
        parent::__construct($registry);
        $this->entityManager = $entityManager;
        $this->transactionManager = $transactionManager;
    }

    /**
     * @param User $user
     *
     * @return int
     */
    public function getCollectedFundsSum(User $user): int
    {
        return $this->transactionManager->getCollectedFundsSum($user);
    }

    /**
     * @return mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param User $user
     *
     * @return void
     */
    public function delete(User $user): void
    {
        $this->entityManager->remove($user);
        $this->entityManager->flush();
    }

    /**
     * @param User $user
     */
    public function save(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush(); // It's for clean code but could be performance problem in future.
    }
}

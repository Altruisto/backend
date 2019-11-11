<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\Transaction;

use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class TransactionRepository
 */
class TransactionRepository extends ServiceEntityRepository
{
    /**
     * TransactionRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    /**
     * @param User $user
     *
     * @return int
     */
    public function getCollectedFundsSum(User $user): int
    {
        try {
            return $this->createQueryBuilder('t')
                ->select('sum(t.commissionAmount) as transactionSummaries')
                ->where('t.user = :user')
                ->setParameter('user', $user)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return 0;
        }
    }
}

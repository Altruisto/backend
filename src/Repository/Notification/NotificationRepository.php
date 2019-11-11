<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\Notification;

use App\Entity\Notification\Notification;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class NotificationRepository
 */
class NotificationRepository extends ServiceEntityRepository
{
    /**
     * NotificationRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    /**
     * @param DateTime $date
     *
     * @return mixed
     */
    public function findAllPublicSince(DateTime $date)
    {
        $qb = $this->getEntityManager()->getRepository(Notification::class)->createQueryBuilder('o');
        $results = $qb
            ->andWhere('o.createdAt >= :createdAt')
            ->andWhere('o.type = :type')
            ->setParameter('createdAt', $date)
            ->setParameter('type', Notification::TYPE_PUBLIC)
            ->getQuery()
            ->getResult();

        return $results;
    }
}

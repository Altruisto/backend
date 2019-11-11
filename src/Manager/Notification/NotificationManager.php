<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\Notification;

use App\Entity\Notification\Notification;
use App\Repository\Notification\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class NotificationManager
 */
class NotificationManager extends NotificationRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * NotificationManager constructor.
     *
     * @param RegistryInterface      $registry
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry);

        $this->entityManager = $entityManager;
    }

    /**
     * @return Notification
     *
     * @throws Exception
     */
    public function create(): Notification
    {
        return new Notification();
    }

    /**
     * @param Notification $notification
     *
     * @return void
     */
    public function save(Notification $notification)
    {
        $this->entityManager->persist($notification);
        $this->entityManager->flush();
    }

    /**
     * @param Notification $notification
     *
     * @return void
     */
    public function delete(Notification $notification)
    {
        $this->entityManager->remove($notification);
        $this->entityManager->flush();
    }
}

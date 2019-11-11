<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\Installation;

use App\Entity\Installation\Log;
use App\Repository\Installation\LogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class LogManager
 */
class LogManager extends LogRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * LogManager constructor.
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
     * @param Log $log
     *
     * @return void
     */
    public function save(Log $log)
    {
        $this->entityManager->persist($log);
        $this->entityManager->flush();
    }

    /**
     * @param Log $log
     *
     * @return void
     */
    public function delete(Log $log)
    {
        $this->entityManager->remove($log);
        $this->entityManager->flush();
    }
}

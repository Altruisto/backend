<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\Cause;

use App\Entity\Cause\Cause;
use App\Repository\Cause\CauseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class CauseManager
 */
class CauseManager extends CauseRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * CauseManager constructor.
     *
     * @param RegistryInterface $registry
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry);
        $this->entityManager = $entityManager;
    }

    /**
     * @return Cause
     */
    public function create(): Cause
    {
        return new Cause();
    }

    /**
     * @param Cause $cause
     *
     * @return void
     */
    public function save(Cause $cause)
    {
        $this->entityManager->persist($cause);
        $this->entityManager->flush(); // It's for clean code but could be performance problem in future.
    }

    /**
     * @param Cause $cause
     *
     * @return void
     */
    public function delete(Cause $cause)
    {
        $this->entityManager->remove($cause);
        $this->entityManager->flush(); // It's for clean code but could be performance problem in future.
    }
}

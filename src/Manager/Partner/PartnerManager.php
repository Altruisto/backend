<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager\Partner;

use App\Entity\Partner\Partner;
use App\Repository\Partner\PartnerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class PartnerManager
 */
class PartnerManager extends PartnerRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * PartnerManager constructor.
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
     * @return Partner
     */
    public function create(): Partner
    {
        return new Partner();
    }

    /**
     * @param Partner $partner
     *
     * @return void
     */
    public function save(Partner $partner)
    {
        $this->entityManager->persist($partner);
        $this->entityManager->flush();
    }

    /**
     * @param Partner $partner
     *
     * @return void
     */
    public function delete(Partner $partner)
    {
        $this->entityManager->remove($partner);
        $this->entityManager->flush();
    }
}

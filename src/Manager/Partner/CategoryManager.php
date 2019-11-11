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

use App\Entity\Partner\Category;
use App\Repository\Partner\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class CategoryManager
 */
class CategoryManager extends CategoryRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * CategoryManager constructor.
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
     * @return Category
     */
    public function create(): Category
    {
        return new Category();
    }

    /**
     * @param Category $category
     *
     * @return void
     */
    public function save(Category $category)
    {
        $this->entityManager->persist($category);
        $this->entityManager->flush();
    }

    /**
     * @param Category $category
     *
     * @return void
     */
    public function delete(Category $category)
    {
        $this->entityManager->remove($category);
        $this->entityManager->flush();
    }
}

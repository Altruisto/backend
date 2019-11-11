<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Partner;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Class Category
 *
 * @ORM\Table(name="partner_categories")
 * @ORM\Entity(repositoryClass="App\Repository\Partner\CategoryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Category
{
    const TYPE_PRIVATE = 'private';

    const TYPE_PUBLIC = 'public';

    const STATUS_SEEN = 'seen';

    const STATUS_UNSEEN = 'unseen';

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Partner\Partner", mappedBy="category", cascade={"persist"})
     */
    private $partners;

    /**
     * Category constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getName();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Collection
     */
    public function getPartners(): Collection
    {
        return $this->partners;
    }
}

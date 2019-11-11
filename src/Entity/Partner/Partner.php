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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Class Partner
 *
 * @ORM\Table(name="partners")
 * @ORM\Entity(repositoryClass="App\Repository\Partner\PartnerRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Partner
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
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $logoUrl;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $domain;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $checkoutUrlPartial;

    /**
     * In seconds
     *
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $cookieExpirationTime;

    /**
     * @var null|string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $donation;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $affiliationNetworkName;

    /**
     * Id w sieci partnerskiej
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $externalAffiliationId;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Partner\ExcludedSubdomain", mappedBy="partner", cascade={"persist"})
     */
    private $excludedSubdomains;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Partner\ExcludedPage", mappedBy="partner", cascade={"persist"})
     */
    private $excludedPages;

    /**
     * @var Category
     *
     * @ManyToOne(targetEntity="App\Entity\Partner\Category", inversedBy="partners", cascade={"persist"})
     * @JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Transaction\Transaction", mappedBy="partner")
     */
    private $transactions;

    /**
     * Partner constructor.
     */
    public function __construct()
    {
        $this->excludedSubdomains = new ArrayCollection();
        $this->excludedPages = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function __toString()
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
     * @param ExcludedSubdomain $excludedSubdomain
     */
    public function addExcludedSubdomain(ExcludedSubdomain $excludedSubdomain)
    {
        if ($this->excludedSubdomains->contains($excludedSubdomain)) {
            return;
        }

        $excludedSubdomain->setPartner($this);

        $this->excludedSubdomains->add($excludedSubdomain);
    }

    /**
     * @param ExcludedPage $excludedPage
     */
    public function addExcludedPage(ExcludedPage $excludedPage)
    {
        if ($this->excludedPages->contains($excludedPage)) {
            return;
        }

        $excludedPage->setPartner($this);

        $this->excludedPages->add($excludedPage);
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
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     */
    public function setLogoUrl(string $logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return null|string
     */
    public function getCheckoutUrlPartial(): ?string
    {
        return $this->checkoutUrlPartial;
    }

    /**
     * @param null|string $checkoutUrlPartial
     */
    public function setCheckoutUrlPartial(?string $checkoutUrlPartial): void
    {
        $this->checkoutUrlPartial = $checkoutUrlPartial;
    }

    /**
     * @return int
     */
    public function getCookieExpirationTime(): int
    {
        return $this->cookieExpirationTime;
    }

    /**
     * @param int $cookieExpirationTime
     */
    public function setCookieExpirationTime(int $cookieExpirationTime): void
    {
        $this->cookieExpirationTime = $cookieExpirationTime;
    }

    /**
     * @return string
     */
    public function getExternalAffiliationId(): string
    {
        return $this->externalAffiliationId;
    }

    /**
     * @param string $externalAffiliationId
     */
    public function setExternalAffiliationId(string $externalAffiliationId): void
    {
        $this->externalAffiliationId = $externalAffiliationId;
    }

    /**
     * @return string
     */
    public function getAffiliationNetworkName(): string
    {
        return $this->affiliationNetworkName;
    }

    /**
     * @param string $affiliationNetworkName
     */
    public function setAffiliationNetworkName(string $affiliationNetworkName): void
    {
        $this->affiliationNetworkName = $affiliationNetworkName;
    }

    /**
     * @return Collection
     */
    public function getExcludedSubdomains(): Collection
    {
        return $this->excludedSubdomains;
    }

    /**
     * @return Collection
     */
    public function getExcludedPages(): Collection
    {
        return $this->excludedPages;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string|null
     */
    public function getDonation(): ?string
    {
        return $this->donation;
    }

    /**
     * @param string|null $donation
     */
    public function setDonation(?string $donation): void
    {
        $this->donation = $donation;
    }

    /**
     * @return Collection
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    /**
     * @param Collection $transactions
     */
    public function setTransactions(Collection $transactions): void
    {
        $this->transactions = $transactions;
    }
}

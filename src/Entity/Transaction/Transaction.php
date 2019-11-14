<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Transaction;

use App\Entity\Cause\Cause;
use App\Entity\Partner\Partner;
use App\Entity\User\User;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Exception;

/**
 * Class Transaction
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="App\Repository\Transaction\TransactionRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Transaction
{
    const NETWORK_AWIN = 'awin';

    const NETWORK_CJ = 'cj';

    const NETWORK_LINKSHARE = 'linkshare';

    const NETWORK_BOOKING = 'booking';

    const NETWORK_EBAY = 'ebay';

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
     * @ORM\Column(type="string")
     */
    private $network;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $externalId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $commissionAmount;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $commissionCurrency;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $saleAmount;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $saleCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $customerCountryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $tracker;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $referredBy;

    /**
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     */
    private $responseContent;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $transactionDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var Cause|null
     *
     * @ManyToOne(targetEntity="App\Entity\Cause\Cause", inversedBy="transactions")
     * @JoinColumn(name="cause_id", referencedColumnName="id")
     */
    private $cause;

    /**
     * @var User|null
     *
     * @ManyToOne(targetEntity="App\Entity\User\User", inversedBy="transactions")
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @var Partner|null
     *
     * @ManyToOne(targetEntity="App\Entity\Partner\Partner", inversedBy="transactions")
     * @JoinColumn(name="partner_id", referencedColumnName="id", nullable=true)
     */
    private $partner;

    /**
     * Notification constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNetwork(): string
    {
        return $this->network;
    }

    /**
     * @param string $network
     */
    public function setNetwork(string $network): void
    {
        $this->network = $network;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCommissionAmount(): int
    {
        return $this->commissionAmount;
    }

    /**
     * @param int $commissionAmount
     */
    public function setCommissionAmount(int $commissionAmount): void
    {
        $this->commissionAmount = $commissionAmount;
    }

    /**
     * @return string
     */
    public function getCommissionCurrency(): string
    {
        return $this->commissionCurrency;
    }

    /**
     * @param string $commissionCurrency
     */
    public function setCommissionCurrency(string $commissionCurrency): void
    {
        $this->commissionCurrency = $commissionCurrency;
    }

    /**
     * @return int
     */
    public function getSaleAmount(): int
    {
        return $this->saleAmount;
    }

    /**
     * @param int $saleAmount
     */
    public function setSaleAmount(int $saleAmount): void
    {
        $this->saleAmount = $saleAmount;
    }

    /**
     * @return string
     */
    public function getSaleCurrency(): string
    {
        return $this->saleCurrency;
    }

    /**
     * @param string $saleCurrency
     */
    public function setSaleCurrency(string $saleCurrency): void
    {
        $this->saleCurrency = $saleCurrency;
    }

    /**
     * @return DateTime
     */
    public function getTransactionDate(): DateTime
    {
        return $this->transactionDate;
    }

    /**
     * @param DateTime $transactionDate
     */
    public function setTransactionDate(DateTime $transactionDate): void
    {
        $this->transactionDate = $transactionDate;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     */
    public function setUpdatedAt(?DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getResponseContent(): array
    {
        return $this->responseContent;
    }

    /**
     * @param array $responseContent
     */
    public function setResponseContent(?array $responseContent): void
    {
        $this->responseContent = $responseContent;
    }

    /**
     * @return Cause|null
     */
    public function getCause(): ?Cause
    {
        return $this->cause;
    }

    /**
     * @param Cause|null $cause
     */
    public function setCause(?Cause $cause): void
    {
        $this->cause = $cause;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @return string|null
     */
    public function getTracker(): ?string
    {
        return $this->tracker;
    }

    /**
     * @param string|null $tracker
     */
    public function setTracker(?string $tracker): void
    {
        $this->tracker = $tracker;
    }

    /**
     * @return Partner|null
     */
    public function getPartner(): ?Partner
    {
        return $this->partner;
    }

    /**
     * @param Partner|null $partner
     */
    public function setPartner(?Partner $partner): void
    {
        $this->partner = $partner;
    }

    /**
     * @return string|null
     */
    public function getCustomerCountryCode(): ?string
    {
        return $this->customerCountryCode;
    }

    /**
     * @param string|null $customerCountryCode
     */
    public function setCustomerCountryCode(?string $customerCountryCode): void
    {
        $this->customerCountryCode = $customerCountryCode;
    }

    /**
     * @return string|null
     */
    public function getReferredBy(): ?string
    {
        return $this->referredBy;
    }

    /**
     * @param string|null $referredBy
     */
    public function setReferredBy(?string $referredBy): void
    {
        $this->referredBy = $referredBy;
    }
}

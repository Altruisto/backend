<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Installation;

use App\Entity\User\User;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Exception;

/**
 * Class Log
 *
 * @ORM\Table(name="installation_logs")
 * @ORM\Entity(repositoryClass="App\Repository\Installation\LogRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Log
{
    const TYPE_INSTALLATION = 'installation';

    const TYPE_UNINSTALLATION = 'uninstallation';

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $referredBy;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $installationId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @var User|null
     *
     * @ManyToOne(targetEntity="App\Entity\User\User")
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * Notification constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->installationId = hash('sha256', uniqid());
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
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getInstallationId(): string
    {
        return $this->installationId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
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

    /**
     * @param string $installationId
     */
    public function setInstallationId(string $installationId): void
    {
        $this->installationId = $installationId;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     *
     * @throws Exception
     */
    public function setUpdatedAt(): void
    {
        $this->updatedAt = new DateTime();
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef(string $ref): void
    {
        $this->ref = $ref;
    }
}

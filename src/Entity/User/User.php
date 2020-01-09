<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\User;

use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Exception;
use Serializable;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\User\UserRepository")
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity
 * @UniqueEntity(fields="username", message="Username already taken")
 * @UniqueEntity(fields="email", message="Email already taken")
 */
class User implements UserInterface, Serializable
{
    const DEFAULT_CURRENCY = 'USD';

    const CAUSE_AREA_EXTREME_POVERTY = 'extreme_poverty';

    const CAUSE_AREA_ANIMAL_SUFFERING = 'animals';

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
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $currency;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $referredBy;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $ref;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $apiKey;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $causeArea;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $googleId;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $facebookId;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Notification\Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Notification\Notification", mappedBy="user")
     */
    private $invitations;

    /**
     * @var Collection
     *
     * @OneToMany(targetEntity="App\Entity\Transaction\Transaction", mappedBy="user")
     */
    private $transactions;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->isActive = false;
        $this->ref = substr(hash('sha256', uniqid()), 0, 5);
        $this->apiKey = hash('sha256', uniqid());
        $this->causeArea = User::CAUSE_AREA_EXTREME_POVERTY;
        $this->currency = self::DEFAULT_CURRENCY;
        $this->updatedAt = new DateTime();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return null|string
     */
    public function getSalt(): ?string
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_API_USER'];
    }

    /**
     *
     */
    public function eraseCredentials()
    { }

    /**
     * @see Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
        ));
    }

    /**
     * @see Serializable::unserialize()
     *
     * @param $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->email,
            $this->password,
        ) = unserialize($serialized, array('allowed_classes' => false));
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     *
     * @throws Exception
     */
    public function setCreatedAt(): void
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     *
     * @throws Exception
     */
    public function setUpdatedAt(): void
    {
        $this->updatedAt = new DateTime();
    }

    /**
     * @return Collection
     */
    public function getNotifications(): ?Collection
    {
        return $this->notifications;
    }

    /**
     * @return Collection
     */
    public function getInvitations(): ?Collection
    {
        return $this->invitations;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCauseArea(): ?string
    {
        return $this->causeArea;
    }

    /**
     * @param string $causeArea
     */
    public function setCauseArea(string $causeArea): void
    {
        $this->causeArea = $causeArea;
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
     * @param string|null $ref
     *
     * @return string
     */
    public function setRef(?string $ref)
    {
        return $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @return string|null
     */
    public function getGoogleId(): ?string
    {
        return $this->googleId;
    }

    /**
     * @param string|null $googleId
     */
    public function setGoogleId(?string $googleId): void
    {
        $this->googleId = $googleId;
    }

    /**
     * @return string|null
     */
    public function getFacebookId(): ?string
    {
        return $this->facebookId;
    }

    /**
     * @param string|null $facebookId
     */
    public function setFacebookId(?string $facebookId): void
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return string
     */
    public function getRegistrationSource(): string
    {
        if (null !== $this->getGoogleId()) {
            return 'google';
        }

        if (null !== $this->getFacebookId()) {
            return 'facebook';
        }

        return 'altruisto';
    }

    /**
     * @return Collection
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }
}

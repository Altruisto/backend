<?php

namespace App\Event\Security;

use App\Entity\User\User;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class UserRegisteredEvent
 */
class UserRegisteredEvent extends Event
{
    const NAME = 'user.registered.event';

    /**
     * @var User
     */
    protected $user;

    /**
     * UserRegisteredEvent constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}

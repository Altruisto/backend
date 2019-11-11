<?php

namespace App\Event\Security;

use App\Entity\User\User;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ResetPasswordRequestEvent
 */
class ResetPasswordRequestEvent extends Event
{
    const NAME = 'user.reset_password_request.event';

    /**
     * @var User
     */
    protected $user;

    /**
     * ResetPasswordRequestEvent constructor.
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

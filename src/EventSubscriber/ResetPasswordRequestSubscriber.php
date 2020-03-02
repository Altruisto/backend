<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\EventSubscriber;

use App\Entity\User\User;
use App\Entity\Security\ResetPasswordToken;
use App\Event\Security\ResetPasswordRequestEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

/**
 * Class ResetPasswordRequestSubscriber
 */
class ResetPasswordRequestSubscriber implements EventSubscriberInterface
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * ResetPasswordRequestSubscriber constructor.
     *
     * @param MailerInterface        $mailer
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ResetPasswordRequestEvent::NAME => [
                'sendEmail'
            ],
        ];
    }

    /**
     * @param ResetPasswordRequestEvent $event
     *
     * @throws TransportExceptionInterface
     */
    public function sendEmail(ResetPasswordRequestEvent $event)
    {
        /** @var User $user */
        $user = $event->getUser();

        $resetPasswordToken = $this->entityManager->getRepository(ResetPasswordToken::class)->findOneBy(['user' => $user]);

        $message = (new TemplatedEmail())
            ->from(new Address(getenv('MAILER_FROM_ADDRESS'), getenv('MAILER_FROM_USERNAME')))
            ->to(new Address($user->getUsername()))
            ->subject('Reset your password')
            ->htmlTemplate('emails/reset_password.html.twig')
            ->context([
                'reset_password_token' => $resetPasswordToken->getToken()
            ]);

        $this->mailer->send($message);
    }
}

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

use App\Entity\Notification\Notification;
use App\Entity\User\User;
use App\Event\Security\UserRegisteredEvent;
use App\Repository\User\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

/**
 * Class UserRegisteredSubscriber
 */
class UserRegisteredSubscriber implements EventSubscriberInterface
{
    const THRESHOLDS = [
        100,
        1000,
        5000,
        10000,
        25000,
        50000,
        100000,
    ];

    const REFERRED_BY_THRESHOLDS = [
        1,
        2,
        3,
        5,
        10,
        15,
        20,
        50,
        100,
    ];

    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * SecuritySubscriber constructor.
     *
     * @param MailerInterface        $mailer
     * @param EntityManagerInterface $entityManager
     * @param LoggerInterface        $logger
     * @param UserRepository         $userRepository
     */
    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager, LoggerInterface $logger, UserRepository $userRepository)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
        $this->userRepository = $userRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            UserRegisteredEvent::NAME => [
                'sendConfirmationEmail',
            ],
        ];
    }

    /**
     * @param UserRegisteredEvent $event
     *
     * @throws TransportExceptionInterface
     */
    public function sendConfirmationEmail(UserRegisteredEvent $event)
    {
        $user = $event->getUser();
        $message = (new TemplatedEmail())
            ->from(new Address(getenv('MAILER_FROM_ADDRESS'), getenv('MAILER_FROM_USERNAME')))
            ->to(new Address($user->getEmail()))
            ->subject('Confirm your email')
            ->htmlTemplate('emails/confirm_email.html.twig')
            ->context([
                'email_verification_token' => $user->getEmailVerificationToken()
            ]);

        $this->mailer->send($message);
    }

    /**
     * @param UserRegisteredEvent $event
     *
     * @throws TransportExceptionInterface
     */
    public function checkReferredByThreshold(UserRegisteredEvent $event)
    {
        if (null === $event->getUser()->getReferredBy()) {
            return;
        }

        /** @var User $referrerUser */
        $referrerUser = $this->userRepository->findOneBy(['ref' => $event->getUser()->getReferredBy()]);

        if (null === $referrerUser) {
            return;
        }

        $referralUsers = $this->userRepository->findBy(['referredBy' => $event->getUser()->getReferredBy()]);
        $referredNumber = count($referralUsers);

        $threshold = $this->getHighestThreshold(count($referredNumber));

        if (null === $threshold) {
            return;
        }

        $notification = new Notification();
        $notification->setUser($referrerUser);
        $notification->setType(Notification::TYPE_PRIVATE);
        $notification->setContent('threshold: '. $threshold);

        $this->entityManager->persist($notification);


        $message = (new TemplatedEmail())
            ->from(new Address(getenv('MAILER_FROM_ADDRESS'), getenv('MAILER_FROM_USERNAME')))
            ->to(new Address($event->getUser()->getEmail()))
            ->subject('Your are awesome!')
            ->htmlTemplate('emails/ref_more_than_x.html.twig')
            ->context([
                'treshold' => $referredNumber
            ]);

        $this->mailer->send($message);
    }

    /**
     * @param int $registeredUsersAmount
     *
     * @return int|null
     */
    private function getHighestThreshold(int $registeredUsersAmount): ?int
    {
        $highestThreshold = null;

        for ($i = 0; $i < count(self::REFERRED_BY_THRESHOLDS); $i++) {
            if ($registeredUsersAmount === self::REFERRED_BY_THRESHOLDS[$i] && $registeredUsersAmount < self::REFERRED_BY_THRESHOLDS[$i+1]) {
                $highestThreshold = self::REFERRED_BY_THRESHOLDS[$i];
            }
        }

        return $highestThreshold;
    }
}

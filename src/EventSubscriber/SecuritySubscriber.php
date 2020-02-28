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
use App\Entity\Security\ResetPasswordToken;
use App\Entity\User\User;
use App\Event\Security\ResetPasswordRequestEvent;
use App\Event\Security\UserRegisteredEvent;
use App\Event\Transaction\TransactionSaveEvent;
use App\Manager\Notification\NotificationManager;
use App\Manager\User\UserManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Psr\Log\LoggerInterface;
use Swift_Mailer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\NamedAddress;
use Twig_Environment;

/**
 * Class SecuritySubscriber
 */
class SecuritySubscriber implements EventSubscriberInterface
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
     * @var UserManager
     */
    private $userManager;

    /**
     * @var NotificationManager
     */
    private $notificationManager;

    /**
     * @var Swift_Mailer
     */
    private $mailer;

    /**
     * @var Twig_Environment
     */
    private $twig;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * SecuritySubscriber constructor.
     *
     * @param UserManager            $userManager
     * @param NotificationManager    $notificationManager
     * @param Twig_Environment       $twig
     * @param EntityManagerInterface $entityManager
     * @param LoggerInterface        $logger
     */
    public function __construct(UserManager $userManager, NotificationManager $notificationManager, MailerInterface $mailer, Twig_Environment $twig, EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->userManager = $userManager;
        $this->notificationManager = $notificationManager;
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return array(
            UserRegisteredEvent::NAME => [
                'checkReferredByThreshold',
                'sendEmail'
            ],
        );
    }

    public function sendEmail(UserRegisteredEvent $event)
    {
        $message = (new TemplatedEmail())
            ->from(getenv('MAILER_FROM'))
            ->to(getenv('MAILER_FROM'))
            ->bcc(getenv('MAILER_USERNAME'))
            ->subject('asdasd')
            ->htmlTemplate('emails/order/reset_password.html.twig')
            ->context([
            ]);

        $this->mailer->send($message);
    }

    /**
     * @param UserRegisteredEvent $event
     *
     * @throws Exception
     */
    public function checkReferredByThreshold(UserRegisteredEvent $event)
    {
        if (null === $event->getUser()->getReferredBy()) {
            return;
        }

        /** @var User $referrerUser */
        $referrerUser = $this->userManager->findOneBy(['ref' => $event->getUser()->getReferredBy()]);

        if (null === $referrerUser) {
            return;
        }

        $referralUsers = $this->userManager->findBy(['referredBy' => $event->getUser()->getReferredBy()]);

        $threshold = $this->getHighestThreshold(count($referralUsers));

        if (null !== $threshold) {
            $notification = $this->notificationManager->create();
            $notification->setUser($referrerUser);
            $notification->setType(Notification::TYPE_PRIVATE);
            $notification->setContent('threshold: '. $threshold);
            $this->notificationManager->save($notification);
        }
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

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
use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use App\Event\Transaction\TransactionSaveEvent;
use App\Manager\Notification\NotificationManager;
use App\Manager\User\UserManager;
use Exception;
use Swift_Mailer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Twig_Environment;

/**
 * Class TransactionSubscriber
 *
 * Listen all events of Transaction
 */
class TransactionSubscriber implements EventSubscriberInterface
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
     * TransactionSubscriber constructor.
     *
     * @param UserManager         $userManager
     * @param NotificationManager $notificationManager
     * @param Swift_Mailer        $mailer
     * @param Twig_Environment   $twig
     */
    public function __construct(UserManager $userManager, NotificationManager $notificationManager, Swift_Mailer $mailer, Twig_Environment $twig)
    {
        $this->userManager = $userManager;
        $this->notificationManager = $notificationManager;
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return array(
            TransactionSaveEvent::NAME => [
                'sendNotification',
                'sendEmail'
            ],
        );
    }

    /**
     * @param TransactionSaveEvent $event
     *
     * @throws Exception
     */
    public function sendNotification(TransactionSaveEvent $event)
    {
        $transaction = $event->getTransaction();
        $user = $transaction->getUser();

        if (!$user instanceof User) {
            return;
        }

        $highestThreshold = $this->getHighestThreshold($transaction);

        if (null === $highestThreshold) {
            return;
        }

        $notification = $this->notificationManager->create();
        $notification->setType(Notification::TYPE_PRIVATE);
        $notification->setUser($user);
        $notification->setContent('przekroczyles level: '.$highestThreshold.' osiagajac: '.$this->userManager->getCollectedFundsSum($user));

        $this->notificationManager->save($notification);
    }

    /**
     * @param TransactionSaveEvent $event
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function sendEmail(TransactionSaveEvent $event)
    {
        $transaction = $event->getTransaction();
        $user = $transaction->getUser();

        if (!$user instanceof User) {
            return;
        }

        $highestThreshold = $this->getHighestThreshold($transaction);

        if (null === $highestThreshold) {
            return;
        }

        $message = (new \Swift_Message('Treshold'))
            ->setFrom(getenv('MAILER_USERNAME'), getenv('MAILER_FROM'))
            ->setTo($event->getTransaction()->getUser()->getEmail())
            ->setBcc(getenv('MAILER_USERNAME'))
            ->setBody($this->twig->render('emails/notifications/collected_more_than_x.html.twig',
                [
                    'transaction' => $transaction,
                    'threshold' => $highestThreshold,
                    'collectedFundsSum' => $this->userManager->getCollectedFundsSum($user),
                ]),
                'text/html'
            );

        $this->mailer->send($message);
    }

    /**
     * @param Transaction $transaction
     *
     * @return int|null
     */
    private function getHighestThreshold(Transaction $transaction): ?int
    {
        $user = $transaction->getUser();
        $collectedFundsSum = $this->userManager->getCollectedFundsSum($user);
        $collectedFundsSumBeforeTransaction = $collectedFundsSum - $transaction->getCommissionAmount();

        $highestThreshold = null;

        for ($i = 0; $i < count(self::THRESHOLDS); $i++) {
            if ($collectedFundsSumBeforeTransaction < self::THRESHOLDS[$i] && $collectedFundsSum >= self::THRESHOLDS[$i]) {
                $highestThreshold = self::THRESHOLDS[$i];
            }
        }

//        $theHighestThreshold = array_reduce(self::THRESHOLDS, "getTheHighestThreshold");

        return $highestThreshold;
    }
}

<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command\Notification;

use App\Entity\Notification\Notification;
use App\Entity\User\User;
use App\Manager\Notification\NotificationManager;
use App\Manager\User\UserManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

/**
 * Class AddNotificationCommand
 */
class AddNotificationCommand extends Command
{
    /**
     * @var NotificationManager
     */
    private $notificationManager;

    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * AddNotificationCommand constructor.
     *
     * @param NotificationManager $notificationManager
     * @param UserManager         $userManager
     */
    public function __construct(NotificationManager $notificationManager, UserManager $userManager)
    {
        parent::__construct();
        $this->notificationManager = $notificationManager;
        $this->userManager = $userManager;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('altruisto:add-notification')
            ->setDescription('Creates new notification (public or private).')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $notification = new Notification();
        $question = new Question('Please enter the content: ');
        $notification->setContent($helper->ask($input, $output, $question));

        $question = new ChoiceQuestion(
            'Please select notification type',
            [Notification::TYPE_PUBLIC, Notification::TYPE_PRIVATE]
        );

        $notificationTypeAnswer = $helper->ask($input, $output, $question);
        if (Notification::TYPE_PUBLIC === $notificationTypeAnswer) {
            $notification->setType(Notification::TYPE_PUBLIC);
        }

        if (Notification::TYPE_PRIVATE === $notificationTypeAnswer) {
            $notification->setType(Notification::TYPE_PRIVATE);

            $question = new Question('Please enter the user ID: ');
            /** @var User $user */
            $user = $this->userManager->findOneBy(['id' => $helper->ask($input, $output, $question)]);
            $notification->setUser($user);
        }

        $this->notificationManager->save($notification);
        $output->writeln('Notification added successfully!');
    }
}

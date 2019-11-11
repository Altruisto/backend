<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Notification;

use App\Entity\Notification\Notification;
use App\Manager\Notification\NotificationManager;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NotificationController
 */
class NotificationController extends AbstractController
{
    /**
     * @var NotificationManager
     */
    private $notificationManager;

    /**
     * NotificationController constructor.
     *
     * @param NotificationManager $notificationManager
     */
    public function __construct(NotificationManager $notificationManager)
    {
        $this->notificationManager = $notificationManager;
    }

    /**
     * @Route("/notifications", methods={"GET"}, name="all_notifications")
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function showAll(Request $request)
    {
        $notifications = [];

        // @TODO add date validation

        /** @var Notification $notification */
        foreach ($this->notificationManager->findAllPublicSince( new DateTime($request->query->get('since_date')) ?? new DateTime()) as $notification) {
            $notifications[] = [
                'id' => $notification->getId(),
                'content' => $notification->getContent(),
                'mode' => $notification->getType(),
                'created_at' => $notification->getCreatedAt()->format('c'),
                'updated_at' => $notification->getUpdatedAt()->format('c'),
            ];
        }

        return new JsonResponse($notifications, JsonResponse::HTTP_OK);
    }
}

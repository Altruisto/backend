<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\User;

use App\Entity\Notification\Notification;
use App\Entity\User\User;
use App\Form\Notification\ChangeStatusType;
use App\Manager\Notification\NotificationManager;
use App\Utils\FormHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @var FormHelper
     */
    private $formHelper;

    /**
     * NotificationController constructor.
     *
     * @param NotificationManager $notificationManager
     * @param FormHelper          $formHelper
     */
    public function __construct(NotificationManager $notificationManager, FormHelper $formHelper)
    {
        $this->notificationManager = $notificationManager;
        $this->formHelper = $formHelper;
    }

    /**
     * @Route("/user/notifications/{id}", methods={"PATCH"}, name="user_patch_notification")
     *
     * @param Request      $request
     * @param Notification $notification
     *
     * @return JsonResponse
     */
    public function show(Request $request, Notification $notification)
    {
        if ($this->getUser() !== $notification->getUser()) {
            return new JsonResponse(null, JsonResponse::HTTP_FORBIDDEN);
        }

        $form = $this->createForm(ChangeStatusType::class, $notification);
        $form->submit(json_decode($request->getContent(), true));

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        /** @var Notification $notification */
        $notification = $form->getData();

        $this->notificationManager->save($notification);

        return new JsonResponse([
            'id' => $notification->getId(),
            'content' => $notification->getContent(),
            'mode' => $notification->getType(),
            'status' => $notification->getStatus(),
            'created_at' => $notification->getCreatedAt()->format('c'),
            'updated_at' => $notification->getUpdatedAt()->format('c'),
        ], JsonResponse::HTTP_OK);
    }

    /**
     * @Route("/user/notifications", methods={"GET"}, name="user_notifications")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function showAll(Request $request)
    {
        /** @var User $user */
        $user = $this->getUser();

        $criteria = [];
        $criteria['user'] = $user;

        if (null !== $request->query->get('status')) {
            $criteria['status'] = $request->query->get('status');
        }

        $notifications = [];

        /** @var Notification $notification */
        foreach ( $this->notificationManager->findBy($criteria) as $notification) {
            $notifications[] = [
                'id' => $notification->getId(),
                'content' => $notification->getContent(),
                'mode' => $notification->getType(),
                'status' => $notification->getStatus(),
                'created_at' => $notification->getCreatedAt()->format('c'),
                'updated_at' => $notification->getUpdatedAt()->format('c'),
            ];
        }

        return new JsonResponse($notifications, JsonResponse::HTTP_OK);
    }
}

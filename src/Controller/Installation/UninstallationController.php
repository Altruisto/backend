<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Installation;

use App\Entity\Installation\Log;
use App\Form\Installation\UninstallationType;
use App\Manager\Installation\LogManager;
use App\Utils\FormHelper;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UninstallationController
 */
class UninstallationController extends AbstractController
{
    /**
     * @var LogManager
     */
    private $logManager;

    /**
     * @var FormHelper
     */
    private $formHelper;

    /**
     * LogController constructor.
     *
     * @param LogManager $logManager
     * @param FormHelper $formHelper
     */
    public function __construct(LogManager $logManager, FormHelper $formHelper)
    {
        $this->logManager = $logManager;
        $this->formHelper = $formHelper;
    }

    /**
     * @Route("/uninstallations", methods={"POST"}, name="create_uninstallation")
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function create(Request $request): JsonResponse
    {
        $form = $this->createForm(UninstallationType::class);
        $form->submit(json_decode($request->getContent(), true));

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $data = $form->getData();

        $log = new Log();
        $log->setIp($data['ip']);
        $log->setReferredBy($data['ref'] ?? null);
        $log->setType(Log::TYPE_UNINSTALLATION);
        $log->setInstallationId($data['installation_id']);
        $log->setUserAgent($data['user_agent']);

        $this->logManager->save($log);

        return new JsonResponse(null, Response::HTTP_OK);
    }
}

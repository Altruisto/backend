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
use App\Entity\User\User;
use App\Form\Installation\InstallationType;
use App\Manager\Installation\LogManager;
use App\Repository\Installation\LogRepository;
use App\Repository\User\UserRepository;
use App\Utils\FormHelper;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LogController
 */
class InstallationController extends AbstractController
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
     * @Route("/installations", methods={"POST"}, name="create_installation")
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function create(Request $request): JsonResponse
    {
        $form = $this->createForm(InstallationType::class);
        $form->submit(json_decode($request->getContent(), true));

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $data = $form->getData();

        $log = new Log();
        $log->setRef(substr(hash('sha256', uniqid()), 0, 5));
        $log->setIp($request->getClientIp());
        $log->setReferredBy($data['referredBy'] ?? null);
        $log->setType(Log::TYPE_INSTALLATION);
        $log->setUserAgent($request->headers->get('User-Agent'));

        $this->logManager->save($log);

        return new JsonResponse([
            'installation_id' => $log->getInstallationId(),
            'ref' => $log->getRef(),
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/installations/{installationId}", methods={"GET"}, name="installation_informations_installation")
     *
     * @param Log            $installation
     * @param LogRepository  $logRepository
     * @param UserRepository $userRepository
     *
     * @return JsonResponse
     */
    public function info(Log $installation, LogRepository $logRepository, UserRepository $userRepository): JsonResponse
    {
        $installation->getRef();

        $users = $userRepository->findBy(['referredBy' => $installation->getRef()]);

        return new JsonResponse([
            'installation_id' => $installation->getInstallationId(),
            'ref' => $installation->getRef(),
            'referrals_count' => count($users),
        ], Response::HTTP_OK);
    }
}

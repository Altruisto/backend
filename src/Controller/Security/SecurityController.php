<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Security;

use App\Entity\Installation\Log;
use App\Entity\Security\ResetPasswordToken;
use App\Entity\User\User;
use App\Event\Security\ResetPasswordRequestEvent;
use App\Event\Security\UserRegisteredEvent;
use App\Form\Security\ResetPasswordRequestType;
use App\Form\Security\ResetPasswordType;
use App\Form\UserType;
use App\Manager\Installation\LogManager;
use App\Manager\User\UserManager;
use App\Utils\FormHelper;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class SecurityController
 */
class SecurityController extends AbstractController
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $userPasswordEncoder;

    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * @var FormHelper
     */
    private $formHelper;

    /**
     * @var LogManager
     */
    private $logManager;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * SecurityController constructor.
     *
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param UserManager                  $userManager
     * @param FormHelper                   $formHelper
     * @param LogManager                   $logManager
     * @param EventDispatcherInterface     $eventDispatcher
     * @param EntityManagerInterface       $entityManager
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder, UserManager $userManager, FormHelper $formHelper, LogManager $logManager, EventDispatcherInterface $eventDispatcher, EntityManagerInterface $entityManager)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->userManager = $userManager;
        $this->formHelper = $formHelper;
        $this->logManager = $logManager;
        $this->eventDispatcher = $eventDispatcher;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/login", name="app_login")
     *
     * @return Response
     */
    public function login(): Response
    {
        return new JsonResponse(null, Response::HTTP_I_AM_A_TEAPOT);
    }

    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/facebook", name="connect_facebook_start")
     *
     * @param ClientRegistry $clientRegistry
     *
     * @return RedirectResponse
     */
    public function connectFacebookAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry->getClient('facebook')->redirect([
                'public_profile', 'email' // the scopes you want to access
            ]);
    }

    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google", name="connect_google_start")
     *
     * @param ClientRegistry $clientRegistry
     *
     * @return RedirectResponse
     */
    public function connectGoogleAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry->getClient('google')->redirect(['email', 'openid', 'profile']);
    }

    /**
     * @Route("/connect/facebook/check", name="connect_facebook_check")
     */
    public function connectFacebookCheckAction()
    {
    }

    /**
     * @Route("/connect/google/check", name="connect_google_check")
     */
    public function connectGoogleCheckAction()
    {
    }

    /**
     * @Route("/register", methods={"POST"}, name="register")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->submit(json_decode($request->getContent(), true));

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $user->setEmail($user->getUsername());
        $user->setPassword($this->userPasswordEncoder->encodePassword($user, $user->getPassword()));

        $this->userManager->save($user);

        /** @var Log $log */
        $log = $this->logManager->findOneBy(['installationId' => $form->get('installation_id')->getData()]);
        if (null !== $log) {
            $log->setUser($user);

            if (null === $this->userManager->findOneBy(['ref' => $log->getRef()])) {
                $user->setRef($log->getRef());
            } else {
                $user->setRef(substr(hash('sha256', uniqid()), 0, 5));
            }

            $this->logManager->save($log);
        }

        $this->eventDispatcher->dispatch(UserRegisteredEvent::NAME, new UserRegisteredEvent($user));

        return new JsonResponse(['id' => $user->getId()], Response::HTTP_CREATED);
    }

    /**
     * @Route("/password-recovery-request", methods={"POST"}, name="reset_user_password_request")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function resetPasswordRequest(Request $request): Response
    {
        $form = $this->createForm(ResetPasswordRequestType::class);
        $form->submit(json_decode($request->getContent(), true));

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $data = $form->getData();

        /** @var User $user */
        $user = $this->userManager->findOneBy(['username' => $data['username']]);

        if (null === $user) {
            return new JsonResponse(null, Response::HTTP_BAD_REQUEST);
        }

        $this->eventDispatcher->dispatch(ResetPasswordRequestEvent::NAME, new ResetPasswordRequestEvent($user));

        return new JsonResponse(null, Response::HTTP_OK);
    }

    /**
     * @Route("/password-recovery", methods={"PATCH"}, name="reset_user_password_patch")
     *
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function resetPassword(Request $request): Response
    {
        $form = $this->createForm(ResetPasswordType::class);
        $form->submit(json_decode($request->getContent(), true));

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $resetPasswordToken = $this->entityManager->getRepository(ResetPasswordToken::class)->findOneBy(['token' => $data['token']]);

            if (null === $resetPasswordToken || !$resetPasswordToken->isValid() || $resetPasswordToken->getExpireAt() < new DateTime()) {
                return new JsonResponse(null, Response::HTTP_BAD_REQUEST);
            }

            /** @var User $user */
            $user = $resetPasswordToken->getUser();

            $user->setPassword($this->userPasswordEncoder->encodePassword($user, $data['newPassword']));

            $this->userManager->save($user);

            $resetPasswordToken->setValid(false);

            $this->entityManager->persist($resetPasswordToken);
            $this->entityManager->flush();


            return new JsonResponse(null, Response::HTTP_OK);
        }

        return new JsonResponse(null, Response::HTTP_OK);
    }
}

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

use App\Entity\Transaction\Transaction;
use App\Entity\User\User;
use App\Form\ChangePasswordType;
use App\Form\SettingsType;
use App\Manager\User\UserManager;
use App\Repository\Installation\LogRepository;
use App\Repository\User\UserRepository;
use App\Utils\FormHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class SecurityController
 */
class UserController extends AbstractController
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
     * @var PasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * SecurityController constructor.
     *
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param UserManager                  $userManager
     * @param FormHelper                   $formHelper
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder, UserManager $userManager, FormHelper $formHelper, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->userManager = $userManager;
        $this->formHelper = $formHelper;
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/user/password", methods={"PUT"}, name="user_change_password")
     *
     * @param Request     $request
     *
     * @return JsonResponse
     */
    public function changePassword(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $form = $this->createForm(ChangePasswordType::class);
        $form->submit($data, true);

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $user = $this->getUser();
        $user->setPassword($this->passwordEncoder->encodePassword($user, $form->get('newPassword')->getData()));
        $this->userManager->save($user);

        return new JsonResponse(null, Response::HTTP_OK);
    }

    /**
     * @Route("/user", methods={"PATCH"}, name="user_settings")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function settings(Request $request)
    {
        /** @var User $user */
        $user = $this->getUser();

        $data = json_decode($request->getContent(), true);

        $form = $this->createForm(SettingsType::class, $user);
        $form->submit($data);

        if (!$form->isValid()) {
            return new JsonResponse($this->formHelper->getFormErrors($form), Response::HTTP_BAD_REQUEST);
        }

        $this->userManager->save($user);

        return new JsonResponse([
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'api_key' => $user->getApiKey(),
            'cause_area' => $user->getCauseArea(),
            'currency' => $user->getCurrency(),
            'created_at' => $user->getCreatedAt()->format('c'),
            'updated_at' => $user->getUpdatedAt()->format('c'),
            'registration_source' => $user->getRegistrationSource(),
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/user", methods={"GET"}, name="user_details")
     *
     * @param LogRepository  $logRepository
     * @param UserRepository $userRepository
     *
     * @return JsonResponse
     */
    public function account(LogRepository $logRepository, UserRepository $userRepository)
    {
        /** @var User $user */
        $user = $this->getUser();

        $moneyRaised = 0;

        /** @var Transaction $transaction */
        foreach ($user->getTransactions() as $transaction) {
            $moneyRaised  += $transaction->getCommissionAmount();
        }

        $installationsCount = count($logRepository->findBy(['referredBy' => $user->getRef(), 'user' => null]));
        $usersCount = count($userRepository->findBy(['referredBy' => $user->getRef()]));

        return new JsonResponse([
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'api_key' => $user->getApiKey(),
            'cause_area' => $user->getCauseArea(),
            'money_raised' => $moneyRaised,
            'currency' => $user->getCurrency(),
            'created_at' => $user->getCreatedAt()->format('c'),
            'updated_at' => $user->getUpdatedAt()->format('c'),
            'ref' => $user->getRef(),
            'registration_source' => $user->getRegistrationSource(),
            'referrals_count' => $installationsCount + $usersCount,
        ], JsonResponse::HTTP_OK);
    }
}

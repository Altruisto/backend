<?php

namespace App\Security;

use App\Entity\Installation\Log;
use App\Entity\User\User;
use App\Manager\Installation\LogManager;
use App\Utils\LocaleCurrencyMapper;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Token\AccessToken;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Class GoogleAuthenticator
 */
class GoogleAuthenticator extends SocialAuthenticator
{
    /**
     * @var ClientRegistry
     */
    private $clientRegistry;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var LocaleCurrencyMapper
     */
    private $localeCurrencyMapper;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $userPasswordEncoder;

    /**
     * @var LogManager
     */
    private $logManager;

    /**
     * GoogleAuthenticator constructor.
     *
     * @param ClientRegistry               $clientRegistry
     * @param EntityManagerInterface       $entityManager
     * @param LocaleCurrencyMapper         $localeCurrencyMapper
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param LogManager                   $logManager
     */
    public function __construct(ClientRegistry $clientRegistry, EntityManagerInterface $entityManager, LocaleCurrencyMapper $localeCurrencyMapper, UserPasswordEncoderInterface $userPasswordEncoder, LogManager $logManager)
    {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->localeCurrencyMapper = $localeCurrencyMapper;
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->logManager = $logManager;
    }

    /**
     * @param Request $request
     *
     * @return bool
     */
    public function supports(Request $request)
    {
        // continue ONLY if the current ROUTE matches the check ROUTE
        return 'connect_google_check' === $request->attributes->get('_route');
    }

    /**
     * @param Request $request
     *
     * @return AccessToken|mixed
     */
    public function getCredentials(Request $request)
    {
        // this method is only called if supports() returns true

        return $this->fetchAccessToken($this->getGoogleClient());
    }

    /**
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @return object|UserInterface|null
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        /** @var GoogleUser $googleUser */
        $googleUser = $this->getGoogleClient()
            ->fetchUserFromToken($credentials);

        $email = $googleUser->getEmail();

        // 1) have they logged in with Google before? Easy!
        $existingUser = $this->entityManager->getRepository(User::class)
            ->findOneBy(['googleId' => $googleUser->getId()]);
        if ($existingUser) {
            return $existingUser;
        }

        // 2) do we have a matching user by email?
        /** @var User $user */
        $user = $this->entityManager->getRepository(User::class)
            ->findOneBy(['email' => $email]);

        // 3) no user? create new!
        if (null === $user) {
            $user = new User();
            $user->setEmail($googleUser->getEmail());
            $user->setUsername($googleUser->getEmail());

            $currency = $this->localeCurrencyMapper->getCurrency($googleUser->getLocale());
            if (null !== $currency) {
                $user->setCurrency($currency);
            }

            $user->setPassword($this->userPasswordEncoder->encodePassword($user, substr(hash('sha256', uniqid()), 0, 10)));
        }

        // 3) Maybe you just want to "register" them by creating
        // a User object
        $user->setGoogleId($googleUser->getId());
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }

    /**
     * @return GoogleClient
     */
    private function getGoogleClient()
    {
        return $this->clientRegistry->getClient('google');
    }

    /**
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     *
     * @return Response|null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        /** @var User $user */
        $user = $token->getUser();

        $installationId = $request->cookies->get('installation_id');
        if (null !== $installationId) {
            /** @var Log $log */
            $log = $this->logManager->findOneBy(['installationId' => $installationId]);
            $log->setUser($user);
            $this->logManager->save($log);
        }

        return new JsonResponse(['apiKey' => $user->getApiKey()]);
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return Response|null
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    /**
     * Called when authentication is needed, but it's not sent.
     * This redirects to the 'login'.
     *
     * @param Request                      $request
     * @param AuthenticationException|null $authException
     *
     * @return RedirectResponse
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        return new RedirectResponse(
            '/connect/', // might be the site, where users choose their oauth provider
            Response::HTTP_TEMPORARY_REDIRECT
        );
    }
}

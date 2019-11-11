<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Partner;

use App\Entity\Partner\ExcludedPage;
use App\Entity\Partner\ExcludedSubdomain;
use App\Entity\Partner\Partner;
use App\Manager\Partner\CategoryManager;
use App\Manager\Partner\PartnerManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PartnerController
 */
class PartnerController extends AbstractController
{
    /**
     * @var PartnerManager
     */
    private $partnerManager;

    /**
     * @var CategoryManager
     */
    private $categoryManager;

    /**
     * PartnerController constructor.
     *
     * @param PartnerManager  $partnerManager
     * @param CategoryManager $categoryManager
     */
    public function __construct(PartnerManager $partnerManager, CategoryManager $categoryManager)
    {
        $this->partnerManager = $partnerManager;
        $this->categoryManager = $categoryManager;
    }

    /**
     * @Route("/partners", methods={"GET"}, name="get_partners")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function showAll(Request $request)
    {
        $criteria = [];

        if (null !== $this->categoryManager->findOneBy(['name' => $request->query->get('category')])) {
            $criteria['category'] = $this->categoryManager->findOneBy(['name' => $request->query->get('category')]);
        }

        $partners = $this->partnerManager->findBy(
            $criteria,
            [
                'domain' => 'ASC'
            ],
            $request->query->get('limit') ?? null,
            $request->query->get('offset') ?? 0
        );

        $responseData = [];

        /** @var Partner $partner */
        foreach ($partners as $partner) {

            $excludedSubdomains = [];
            $excludedPages = [];

            /** @var ExcludedSubdomain $excludedSubdomain */
            foreach ($partner->getExcludedSubdomains() as $excludedSubdomain) {
                $excludedSubdomains[] = [
                    'id' => $excludedSubdomain->getId(),
                    'name' => $excludedSubdomain->getName(),
                ];
            }

            /** @var ExcludedPage $excludedPage */
            foreach ($partner->getExcludedPages() as $excludedPage) {
                $excludedPages[] = [
                    'id' => $excludedPage->getId(),
                    'name' => $excludedPage->getName(),
                ];
            }

            $responseData[] = [
                'name' => $partner->getName(),
                'domain' => $partner->getDomain(),
                'checkoutUrlPartial' => $partner->getCheckoutUrlPartial(),
                'cookieExpiration' => $partner->getCookieExpirationTime(),
                'donation' => $partner->getDonation(),
                'excludedPages' => $excludedPages,
                'excludedSubdomains' => $excludedSubdomains,
            ];
        }

        return new JsonResponse($responseData, Response::HTTP_OK);
    }
}

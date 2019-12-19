<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Entity\Partner\Partner;
use App\Repository\Partner\PartnerRepository;
use App\Utils\Redirector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RedirectController
 */
class RedirectController extends AbstractController
{
    /**
     * @Route("/redirect", methods={"GET"}, name="redirect_get")
     *
     * @param Request                $request
     * @param Redirector             $redirector
     * @param PartnerRepository      $partnerRepository
     *
     * @return JsonResponse
     */
    public function showAll(Request $request, Redirector $redirector, PartnerRepository $partnerRepository)
    {
        $url = $request->get('url');
        $tracker = $request->get('tracker');

        if($redirector->validate_url($url)) {
            if($parts = parse_url($url)){
                if(!isset($parts["scheme"])){
                    $url = "http://$url";
                }
            }

            $domain = $redirector->get_domain($url);

            /** @var Partner $partner */
            $partner = $partnerRepository->findOneBy(['domain' => $domain]);

            if(!empty($result)){
                header("location: " . 'https://altruisto.com/partners/not-found');
            }
        }

        $monetizedLink = $redirector->monetize_link($url, ['network' => $partner->getAffiliationNetworkName(), 'network_id' => $partner->getExternalAffiliationId()], $tracker);

        return new JsonResponse($monetizedLink, JsonResponse::HTTP_OK);
    }
}

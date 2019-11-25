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
     * @param Request    $request
     * @param string     $url
     * @param string     $tracker
     * @param Redirector $redirector
     *
     * @return JsonResponse
     *
     */
    public function showAll(Request $request, string $url, string $tracker, Redirector $redirector)
    {
        $url = $_GET['url'];

        if($redirector->validate_url($url)){
            //add http:// if no scheme

            if($parts = parse_url($url)){
                if(!isset($parts["scheme"])){
                    $url = "http://$url";
                }
            }

            $domain = $redirector->get_domain($url);

            $sth = $db->prepare("SELECT `network`, `network_id` FROM `partners` WHERE domain = '" . $domain . "'");
            $sth->execute();

            $result = $sth->fetch(PDO::FETCH_ASSOC);

            if(!empty($result)){
                header("location: " . monetize_link($url, $result));
            }
        }

        return new JsonResponse($notifications, JsonResponse::HTTP_OK);
    }
}

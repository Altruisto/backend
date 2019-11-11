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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class OpenStatisticsController
 */
class OpenStatisticsController extends AbstractController
{
    /**
     * SecurityController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @Route("/statistics/{currency}", name="open_statistics")
     *
     * @param string $currency
     *
     * @return JsonResponse
     */
    public function account(string $currency)
    {
        return new JsonResponse([
            'total_money_raised' => "miliard kurwa ".$currency,
        ], JsonResponse::HTTP_OK);
    }
}

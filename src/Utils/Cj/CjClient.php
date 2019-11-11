<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Utils\Cj;

use DateTime;
use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;

/**
 * Class CjClient
 */
class CjClient
{
    const TRANSACTION_STATUS_POSTING = 'posting';

    /**
     * @var GuzzleClient
     */
    private $guzzleClient;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * CjClient constructor.
     *
     * @param GuzzleClient $guzzleClient
     * @param string $apiKey
     */
    public function __construct(GuzzleClient $guzzleClient, string $apiKey)
    {
        $this->guzzleClient = $guzzleClient;
        $this->apiKey = $apiKey;
    }

    /**
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param string   $dataType
     *
     * @return array
     *
     * @throws Exception
     */
    public function getTransactions(DateTime $startDate, DateTime $endDate, string $dataType)
    {
        if (!in_array($dataType, $this->getTransactionDataTypes())) {
            throw new Exception('Unknown transactionDataType');
        }

        $response = $this->guzzleClient->post('https://commissions.api.cj.com/query', [
            'headers' => [
                'Authorization' => 'Bearer '.$this->apiKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            RequestOptions::JSON => [
                'query' => sprintf('{publisherCommissions(forPublishers: ["4771400"], sincePostingDate:"%s",beforePostingDate:"%s") {count, records {actionTrackerName,websiteName, advertiserName, commissionId, postingDate, sid, advertiserId, actionStatus, pubCommissionAmountPubCurrency, saleAmountPubCurrency, shopperId, country, eventDate, pubCommissionAmountUsd, items {quantity, perItemSaleAmountPubCurrency, totalCommissionPubCurrency}}}}', $startDate->format('Y-m-d\TH:i:s\Z'), $endDate->format('Y-m-d\TH:i:s\Z')),
                'variables' => null,
            ]
        ]);

        $transactions = json_decode($response->getBody()->getContents(), true);

        return $transactions['data']['publisherCommissions']['records'];
    }

    /**
     * @return array
     */
    public function getTransactionDataTypes(): array
    {
        return [
            CjClient::TRANSACTION_STATUS_POSTING,
        ];
    }
}

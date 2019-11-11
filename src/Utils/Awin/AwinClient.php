<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Utils\Awin;

use DateTime;
use Exception;
use GuzzleHttp\Client as GuzzleClient;

/**
 * Class AwinManager
 */
class AwinClient
{
    const TRANSACTION_STATUS_PENDING = 'pending';

    const TRANSACTION_STATUS_APPROVED = 'approved';

    const TRANSACTION_STATUS_DECLINED = 'declined';

    const TRANSACTION_STATUS_DELETED = 'deleted';

    /**
     * @var GuzzleClient
     */
    private $guzzleClient;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $publisherId;

    /**
     * AwinManager constructor.
     *
     * @param GuzzleClient $guzzleClient
     * @param string $accessToken
     * @param string $publisherId
     */
    public function __construct(GuzzleClient $guzzleClient, string $accessToken, string $publisherId)
    {
        $this->guzzleClient = $guzzleClient;
        $this->accessToken = $accessToken;
        $this->publisherId = $publisherId;
    }

    /**
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param string $status
     *
     * @return array
     *
     * @throws Exception
     */
    public function getTransactions(DateTime $startDate, DateTime $endDate, string $status)
    {
        if (!in_array($status, $this->getTransactionStatuses())) {
            throw new Exception('Unknown transactionStatus');
        }

        $response = $this->guzzleClient->get(
            sprintf('https://api.awin.com/publishers/%s/transactions/?startDate=%s&endDate=%s&timezone=UTC&status=%s&accessToken=%s',
                $this->publisherId, $startDate->format('Y-m-d\TH:i:s'), $endDate->format('Y-m-d\TH:i:s'), $status, $this->accessToken)
        );

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getTransactionStatuses()
    {
        return [
            self::TRANSACTION_STATUS_PENDING,
            self::TRANSACTION_STATUS_APPROVED,
            self::TRANSACTION_STATUS_DECLINED,
            self::TRANSACTION_STATUS_DELETED,
        ];
    }
}

<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Event\Transaction;

use App\Entity\Transaction\Transaction;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class TransactionSaveEvent
 */
class TransactionSaveEvent extends Event
{
    const NAME = 'transaction.save';

    /**
     * @var Transaction
     */
    protected $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return Transaction
     */
    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }
}

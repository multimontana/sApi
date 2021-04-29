<?php

namespace Loyalty\UseCase;

class Transaction
{
    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return rand(0, 10000);
    }
}

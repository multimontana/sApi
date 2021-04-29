<?php

namespace Loyalty\UseCase;

class Hash
{
    /**
     * @param int $transactionId
     * @param string $methodName
     * @param string $login
     * @param string $password
     * @return string
     */
    public function generateHash(
        int $transactionId,
        string $methodName,
        string $login,
        string $password
    ): string {
        return md5($transactionId . $methodName . $login . $password);
    }
}

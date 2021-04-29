<?php

namespace Loyalty\Services;

use Loyalty\UseCase\Hash;
use Loyalty\UseCase\Transaction;

class LoyaltyService
{
    private $login;
    private $password;

    /**
     * LoyaltyService constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $url
     * @return array
     */
    public function getApiCategories(string $url): array
    {
        $hashClass = new Hash();
        $transaction = new Transaction();
        $transactionId = $transaction->getTransactionId();
        $hash = $hashClass->generateHash(
            $transactionId,
            'GetCategories',
            $this->getLogin(),
            $this->getPassword()
        );

        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                <Request>
                    <Authentication>
                        <Login>{$this->getLogin()}</Login>
                        <TransactionID>{$transactionId}</TransactionID>
                        <MethodName>GetCategories</MethodName>
                        <Hash>{$hash}</Hash>
                    </Authentication>
                </Request>
        ";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . 'v1/GetCategories/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

        return json_decode(
            json_encode(simplexml_load_string(curl_exec($ch))),
            true
        );
    }

    public function getApiProducts(string $url): array
    {
        $hashClass = new Hash();
        $transaction = new Transaction();
        $transactionId = $transaction->getTransactionId();
        $hash = $hashClass->generateHash(
            $transactionId,
            'GetProduct',
            $this->getLogin(),
            $this->getPassword()
        );

        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                <Request>
                    <Authentication>
                        <Login>{$this->getLogin()}</Login>
                        <TransactionID>{$transactionId}</TransactionID>
                        <MethodName>GetProduct</MethodName>
                        <Hash>{$hash}</Hash>
                    </Authentication>
                    <Parameters></Parameters>
                </Request>
        ";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . 'v1/GetProduct/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

        return json_decode(
            json_encode(simplexml_load_string(curl_exec($ch))),
            true
        );
    }
}

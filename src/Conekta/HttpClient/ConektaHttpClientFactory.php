<?php


namespace Digitec\Conekta\HttpClient;


use Conekta\Conekta;

/**
 * Class ConektaHttpClientFactory
 * @package Digitec\Conekta
 */
class ConektaHttpClientFactory
{

    /**
     * @param string $apiVersion
     * @param string $privateKey
     * @return ConektaHttpClientInterface
     */
    public static function getClient(string $apiVersion, string $privateKey): ConektaHttpClientInterface
    {
        return new ConektaHttpClient(
            [
                'base_uri' => Conekta::$apiBase,
                'headers' => [
                    'Accept' => 'application/vnd.conekta-v' . $apiVersion . '+json',
                    'Authorization' => 'Basic ' . base64_encode($privateKey),
                    'Content-Type' => 'application/json; charset=utf-8'
                ]
            ]
        );
    }


}

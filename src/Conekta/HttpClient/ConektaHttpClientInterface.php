<?php


namespace Digitec\Conekta\HttpClient;


use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ConektaHttpClientInterface
 * @package Digitec\Conekta
 */
interface ConektaHttpClientInterface extends ClientInterface
{

    public function get($uri, array $options = []): ResponseInterface;

}

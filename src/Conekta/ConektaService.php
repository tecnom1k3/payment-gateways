<?php


namespace Digitec\Conekta;


use Conekta\Conekta;
use Conekta\Order;
use Digitec\Conekta\Dto\Order\ListOrderResponse;
use Digitec\Conekta\Dto\Order\Request\CreateRequest;
use Digitec\Conekta\HttpClient\ConektaHttpClientInterface;
use Illuminate\Support\Facades\Log;
use JsonMapper;
use JsonMapper_Exception;


/**
 * Class ConektaService
 * @package Digitec\Conekta
 */
class ConektaService implements ConektaServiceInterface
{

    /**
     * @var ConektaHttpClientInterface
     */
    protected ConektaHttpClientInterface $client;

    protected JsonMapper $jsonMapper;

    /**
     * ConektaService constructor.
     * @param ConektaHttpClientInterface $client
     * @param string $apiKey
     * @param string $apiVersion
     * @param string $locale
     * @param JsonMapper $jsonMapper
     */
    public function __construct(ConektaHttpClientInterface $client, string $apiKey, string $apiVersion, string $locale, JsonMapper $jsonMapper)
    {
        Conekta::setApiKey($apiKey);
        Conekta::setApiVersion($apiVersion);
        Conekta::setLocale($locale);
        $this->client = $client;
        $this->jsonMapper = $jsonMapper;
    }

    /**
     * @return ListOrderResponse
     * @throws JsonMapper_Exception
     */
    public function list(): ListOrderResponse
    {
        $rs = $this->client->get('orders')->getBody()->getContents();
        $obj = json_decode($rs);
        return $this->jsonMapper->map($obj, new ListOrderResponse);
    }

    /**
     * @param Dto\Order\Request\CreateRequest $createRequest
     * @return array
     */
    public function createOrder(CreateRequest $createRequest): array
    {
        /** @var Order $rs */
        $rs = Order::create($createRequest->getRequestArray());
        return $rs->getArrayCopy();
    }

}

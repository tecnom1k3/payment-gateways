<?php


namespace Digitec\Conekta;


use Digitec\Conekta\Dto\Order\ListOrderResponse;
use Digitec\Conekta\Dto\Order\Request\CreateRequest;

/**
 * Interface ConektaServiceInterface
 * @package Digitec\Conekta
 */
interface ConektaServiceInterface
{

    /**
     * @return ListOrderResponse
     */
    public function list(): ListOrderResponse;

    /**
     * @param Dto\Order\Request\CreateRequest $createRequest
     * @return array
     */
    public function createOrder(CreateRequest $createRequest): array;
}

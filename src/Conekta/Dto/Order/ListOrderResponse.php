<?php

namespace Digitec\Conekta\Dto\Order;

use Digitec\Conekta\Dto\AList;
use Digitec\Contracts\Arrayable;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Class ListOrderResponse
 * @package Digitec\Conekta\Dto
 */
class ListOrderResponse extends AList implements Arrayable
{

    /**
     * @var Order[]
     */
    protected array $data;

    /**
     * @return Order[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Order[] $data
     * @return ListOrderResponse
     */
    public function setData(array $data): ListOrderResponse
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    #[ArrayShape(['has_more' => "bool", 'total' => "int", 'object' => "string", 'data' => "Order[]"])]
    public function toArray(): array
    {
        return [
            'has_more' => $this->hasMore,
            'total' => $this->total,
            'object' => $this->object,
            'data' => array_map(function (Order $item) {
                return $item->toArray();
            }, $this->data),
        ];
    }
}

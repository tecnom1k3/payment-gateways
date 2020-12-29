<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Conekta\Dto\AList;
use Digitec\Contracts\Arrayable;

class ShippingLines extends AList implements Arrayable
{
    /**
     * @var ShippingLine[]
     */
    protected array $data;

    /**
     * @return ShippingLine[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ShippingLine[] $data
     * @return ShippingLines
     */
    public function setData(array $data): ShippingLines
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'object' => $this->object,
            'has_more' => $this->hasMore,
            'total' => $this->total,
            'data' => array_map(function (ShippingLine $item) {
                return $item->toArray();
            }, $this->data),
        ];
    }
}

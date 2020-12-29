<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Conekta\Dto\AList;
use Digitec\Contracts\Arrayable;

/**
 * Class Charges
 * @package Digitec\Conekta\Dto
 */
class Charges extends AList implements Arrayable
{
    /**
     * @var \Conekta\Charge[]
     */
    protected array $data;

    /**
     * @return \Conekta\Charge[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param \Conekta\Charge[] $data
     * @return Charges
     */
    public function setData(array $data): Charges
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'object' => $this->object,
            'has_more' => $this->hasMore,
            'total' => $this->total,
            'data' => array_map(function (\Conekta\Charge $item) {
                return $item->getArrayCopy();
            }, $this->data),
        ];
    }
}

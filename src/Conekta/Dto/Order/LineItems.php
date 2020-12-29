<?php


namespace Digitec\Conekta\Dto\Order;

use Digitec\Conekta\Dto\AList;
use Digitec\Contracts\Arrayable;

/**
 * Class LineItems
 * @package Digitec\Conekta\Dto
 */
class LineItems extends AList implements Arrayable
{
    /**
     * @var LineItem[]
     */
    protected array $data;

    /**
     * @return LineItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param LineItem[] $data
     * @return LineItems
     */
    public function setData(array $data): LineItems
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
            'data' => array_map(function (LineItem $item) {
                return $item->getArrayCopy();
            }, $this->data),
        ];
    }
}

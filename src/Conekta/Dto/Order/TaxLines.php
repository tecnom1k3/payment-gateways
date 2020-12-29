<?php


namespace Digitec\Conekta\Dto\Order;



use Digitec\Conekta\Dto\AList;
use Digitec\Contracts\Arrayable;

class TaxLines extends AList implements Arrayable
{

    /**
     * @var \Conekta\TaxLine[]
     */
    protected array $data;

    /**
     * @return \Conekta\TaxLine[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param \Conekta\TaxLine[] $data
     * @return TaxLines
     */
    public function setData(array $data): TaxLines
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
            'data' => array_map(function (\Conekta\TaxLine $item) {
                return $item->getArrayCopy();
            }, $this->data),
        ];
    }
}

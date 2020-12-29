<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Contracts\Arrayable;

/**
 * Class ShippingLine
 * @package Digitec\Conekta\Dto
 */
class ShippingLine implements Arrayable
{

    /**
     * @var int
     */
    protected int $amount;

    /**
     * @var string
     */
    protected string $carrier;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $parentId;

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return ShippingLine
     */
    public function setAmount(int $amount): ShippingLine
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     * @return ShippingLine
     */
    public function setCarrier(string $carrier): ShippingLine
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return ShippingLine
     */
    public function setObject(string $object): ShippingLine
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ShippingLine
     */
    public function setId(string $id): ShippingLine
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     * @return ShippingLine
     */
    public function setParentId(string $parentId): ShippingLine
    {
        $this->parentId = $parentId;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'amount' => $this->amount,
            'carrier' => $this->carrier,
            'object' => $this->object,
            'id' => $this->id,
            'parent_id' => $this->parentId,
        ];
    }
}

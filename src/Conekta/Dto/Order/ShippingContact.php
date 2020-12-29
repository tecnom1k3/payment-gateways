<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Contracts\Arrayable;

/**
 * Class ShippingContact
 * @package Digitec\Conekta\Dto
 */
class ShippingContact implements Arrayable
{

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var ShippingAddress
     */
    protected ShippingAddress $address;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @var int
     */
    protected int $created_at;

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return ShippingContact
     */
    public function setPhone(string $phone): ShippingContact
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return ShippingAddress
     */
    public function getAddress(): ShippingAddress
    {
        return $this->address;
    }

    /**
     * @param ShippingAddress $address
     * @return ShippingContact
     */
    public function setAddress(ShippingAddress $address): ShippingContact
    {
        $this->address = $address;
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
     * @return ShippingContact
     */
    public function setId(string $id): ShippingContact
    {
        $this->id = $id;
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
     * @return ShippingContact
     */
    public function setObject(string $object): ShippingContact
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->created_at;
    }

    /**
     * @param int $created_at
     * @return ShippingContact
     */
    public function setCreatedAt(int $created_at): ShippingContact
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'phone' => $this->phone,
            'address' => $this->address->toArray(),
            'id' => $this->id,
            'object' => $this->object,
            'created_at' => $this->created_at,
        ];
    }
}

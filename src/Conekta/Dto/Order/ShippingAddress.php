<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Contracts\Arrayable;

/**
 * Class ShippingAddress
 * @package Digitec\Conekta\Dto
 */
class ShippingAddress implements Arrayable
{

    /**
     * @var string
     */
    protected string $street1;

    /**
     * @var string
     */
    protected string $city;

    /**
     * @var string
     */
    protected string $state;

    /**
     * @var string
     */
    protected string $country;

    /**
     * @var bool
     */
    protected bool $residential;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @var string
     */
    protected string $postal_code;

    /**
     * @return string
     */
    public function getStreet1(): string
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return ShippingAddress
     */
    public function setStreet1(string $street1): ShippingAddress
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ShippingAddress
     */
    public function setCity(string $city): ShippingAddress
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ShippingAddress
     */
    public function setState(string $state): ShippingAddress
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return ShippingAddress
     */
    public function setCountry(string $country): ShippingAddress
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResidential(): bool
    {
        return $this->residential;
    }

    /**
     * @param bool $residential
     * @return ShippingAddress
     */
    public function setResidential(bool $residential): ShippingAddress
    {
        $this->residential = $residential;
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
     * @return ShippingAddress
     */
    public function setObject(string $object): ShippingAddress
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     * @return ShippingAddress
     */
    public function setPostalCode(string $postal_code): ShippingAddress
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'street1' => $this->street1,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'residential' => $this->residential,
            'object' => $this->object,
            'postal_code' => $this->postal_code,
        ];
    }
}

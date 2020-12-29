<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class Address
 * @package Digitec\Conekta\Dto\Order\Request
 */
class Address
{
    /**
     * @var string
     */
    protected string $street1; //String
    /**
     * @var string
     */
    protected string  $street2; //String
    /**
     * @var string
     */
    protected string  $city; //String
    /**
     * @var string
     */
    protected string  $state; //String
    /**
     * @var string
     */
    protected string  $country; //String
    /**
     * @var string
     */
    protected string  $postal_code;

    /**
     * @return string
     */
    public function getStreet1(): string
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return Address
     */
    public function setStreet1(string $street1): Address
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2(): string
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return Address
     */
    public function setStreet2(string $street2): Address
    {
        $this->street2 = $street2;
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
     * @return Address
     */
    public function setCity(string $city): Address
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
     * @return Address
     */
    public function setState(string $state): Address
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
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
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
     * @return Address
     */
    public function setPostalCode(string $postal_code): Address
    {
        $this->postal_code = $postal_code;
        return $this;
    } //String
}

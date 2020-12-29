<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class Shipping
 * @package Digitec\Conekta\Dto\Order\Request
 */
class Shipping
{
    /**
     * @var string
     */
    protected string $carrier; //String
    /**
     * @var int
     */
    protected int $amount;

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     * @return Shipping
     */
    public function setCarrier(string $carrier): Shipping
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return Shipping
     */
    public function setAmount(int $amount): Shipping
    {
        $this->amount = $amount;
        return $this;
    }
}

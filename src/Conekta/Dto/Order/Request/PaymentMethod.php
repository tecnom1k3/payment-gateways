<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class PaymentMethod
 * @package Digitec\Conekta\Dto\Order\Request
 */
class PaymentMethod
{
    /**
     * @var string
     */
    protected string $type; //String
    /**
     * @var string
     */
    protected string $token;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PaymentMethod
     */
    public function setType(string $type): PaymentMethod
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return PaymentMethod
     */
    public function setToken(string $token): PaymentMethod
    {
        $this->token = $token;
        return $this;
    } //String
}

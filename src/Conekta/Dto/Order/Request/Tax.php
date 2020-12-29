<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class Tax
 * @package Digitec\Conekta\Dto\Order\Request
 */
class Tax
{
    /**
     * @var string
     */
    protected string $name; //String
    /**
     * @var int
     */
    protected int $amount;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tax
     */
    public function setName(string $name): Tax
    {
        $this->name = $name;
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
     * @return Tax
     */
    public function setAmount(int $amount): Tax
    {
        $this->amount = $amount;
        return $this;
    } //int
}

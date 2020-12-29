<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class Item
 * @package Digitec\Conekta\Dto\Order\Request
 */
class Item
{
    /**
     * @var string
     */
    protected string $name; //String
    /**
     * @var int
     */
    protected  int $unitPrice; //int
    /**
     * @var int
     */
    protected  int $quantity;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName(string $name): Item
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     * @return Item
     */
    public function setUnitPrice(int $unitPrice): Item
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Item
     */
    public function setQuantity(int $quantity): Item
    {
        $this->quantity = $quantity;
        return $this;
    } //int


}

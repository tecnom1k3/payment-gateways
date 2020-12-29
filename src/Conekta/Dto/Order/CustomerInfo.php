<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Contracts\Arrayable;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Class CustomerInfo
 * @package Digitec\Conekta\Dto
 */
class CustomerInfo implements Arrayable
{

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CustomerInfo
     */
    public function setEmail(string $email): CustomerInfo
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return CustomerInfo
     */
    public function setPhone(string $phone): CustomerInfo
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CustomerInfo
     */
    public function setName(string $name): CustomerInfo
    {
        $this->name = $name;
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
     * @return CustomerInfo
     */
    public function setObject(string $object): CustomerInfo
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @inheritDoc
     */
    #[ArrayShape(['email' => "string", 'phone' => "string", 'name' => "string", 'object' => "string"])]
    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'phone' => $this->phone,
            'name' => $this->name,
            'object' => $this->object,
        ];
    }
}

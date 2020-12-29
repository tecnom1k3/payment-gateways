<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class CreateRequest
 * @package Digitec\Conekta\Dto\Order\Request
 */
class CreateRequest
{
    /**
     * @var Item[]
     */
    protected array $items; //array( Items )
    /**
     * @var Shipping
     */
    protected Shipping $shipping; //Shipping
    /**
     * @var Tax[]
     */
    protected array $taxes; //array( Taxes )
    /**
     * @var Customer
     */
    protected Customer $customer; //Customer
    /**
     * @var Charges
     */
    protected Charges $charges; //Charges
    /**
     * @var string
     */
    protected string $currency;

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return CreateRequest
     */
    public function setCustomer(Customer $customer): CreateRequest
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return CreateRequest
     */
    public function setCurrency(string $currency): CreateRequest
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequestArray(): array
    {
        return [
            'currency' => $this->currency,
            'customer_info' => [
                'name' => $this->customer->getName(),
                'phone' => $this->customer->getPhone(),
                'email' => $this->customer->getEmail(),
            ],
            'shipping_contact' => [
                'phone' => $this->customer->getPhone(),
                'address' => [
                    'street1' => $this->customer->getAddress()->getStreet1(),
                    'street2' => $this->customer->getAddress()->getStreet2(),
                    'city' => $this->customer->getAddress()->getCity(),
                    'state' => $this->customer->getAddress()->getState(),
                    'country' => $this->customer->getAddress()->getCountry(),
                    'postal_code' => $this->customer->getAddress()->getPostalCode()
                ],
            ],
            'line_items' => array_map(
                function (Item $item) {
                    return [
                        'name' => $item->getName(),
                        'unit_price' => $item->getUnitPrice(),
                        'quantity' => $item->getQuantity(),
                    ];
                },
                $this->getItems()
            ),
            'shipping_lines' => array_map(
                function (Shipping $shipping) {
                    return [
                        'amount' => $shipping->getAmount(),
                        'carrier' => $shipping->getCarrier(),
                    ];
                },
                [$this->getShipping()]
            ),
            'tax_lines' => array_map(
                function (Tax $tax) {
                    return [
                        'description' => $tax->getName(),
                        'amount' => $tax->getAmount(),
                    ];
                },
                $this->getTaxes()
            ),
            'charges' => array_map(
                function (Charges $charges) {
                    return [
                        'amount' => $charges->getTotalAmount(),
                        'payment_method' => [
                            'expires_at' => time() + 259200,
                            'type' => $charges->getPaymentMethod()->getType(),
                            'token_id' => $charges->getPaymentMethod()->getToken(),
                        ],
                    ];
                },
                [$this->getCharges()]
            ),
        ];
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return CreateRequest
     */
    public function setItems(array $items): CreateRequest
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return Shipping
     */
    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    /**
     * @param Shipping $shipping
     * @return CreateRequest
     */
    public function setShipping(Shipping $shipping): CreateRequest
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param Tax[] $taxes
     * @return CreateRequest
     */
    public function setTaxes(array $taxes): CreateRequest
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * @return Charges
     */
    public function getCharges(): Charges
    {
        return $this->charges;
    }

    /**
     * @param Charges $charges
     * @return CreateRequest
     */
    public function setCharges(Charges $charges): CreateRequest
    {
        $this->charges = $charges;
        return $this;
    }
}

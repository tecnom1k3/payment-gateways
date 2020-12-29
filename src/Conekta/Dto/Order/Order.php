<?php


namespace Digitec\Conekta\Dto\Order;


use Digitec\Contracts\Arrayable;

/**
 * Class Order
 * @package Digitec\Conekta\Dto
 */
class Order implements Arrayable
{

    /**
     * @var bool
     */
    protected bool $liveMode;

    /**
     * @var int
     */
    protected int $amount;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var string
     */
    protected string $paymentStatus;

    /**
     * @var int
     */
    protected int $amountRefunded;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @var int
     */
    protected int $updatedAt;

    /**
     * @var CustomerInfo
     */
    protected CustomerInfo $customerInfo;

    /**
     * @var ShippingContact
     */
    protected ShippingContact $shippingContact;

    /**
     * @var LineItems
     */
    protected LineItems $lineItems;

    /**
     * @var ShippingLines
     */
    protected ShippingLines $shippingLines;

    /**
     * @var TaxLines
     */
    protected TaxLines $taxLines;

    /**
     * @var Charges
     */
    protected Charges $charges;

    /**
     * @return CustomerInfo
     */
    public function getCustomerInfo(): CustomerInfo
    {
        return $this->customerInfo;
    }

    /**
     * @param CustomerInfo $customerInfo
     * @return Order
     */
    public function setCustomerInfo(CustomerInfo $customerInfo): Order
    {
        $this->customerInfo = $customerInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLiveMode(): bool
    {
        return $this->liveMode;
    }

    /**
     * @param bool $liveMode
     * @return Order
     */
    public function setLiveMode(bool $liveMode): Order
    {
        $this->liveMode = $liveMode;
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
     * @return Order
     */
    public function setAmount(int $amount): Order
    {
        $this->amount = $amount;
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
     * @return Order
     */
    public function setCurrency(string $currency): Order
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     * @return Order
     */
    public function setPaymentStatus(string $paymentStatus): Order
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmountRefunded(): int
    {
        return $this->amountRefunded;
    }

    /**
     * @param int $amountRefunded
     * @return Order
     */
    public function setAmountRefunded(int $amountRefunded): Order
    {
        $this->amountRefunded = $amountRefunded;
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
     * @return Order
     */
    public function setObject(string $object): Order
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
     * @return Order
     */
    public function setId(string $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     * @return Order
     */
    public function setCreatedAt(int $createdAt): Order
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     * @return Order
     */
    public function setUpdatedAt(int $updatedAt): Order
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return ShippingContact
     */
    public function getShippingContact(): ShippingContact
    {
        return $this->shippingContact;
    }

    /**
     * @param ShippingContact $shippingContact
     * @return Order
     */
    public function setShippingContact(ShippingContact $shippingContact): Order
    {
        $this->shippingContact = $shippingContact;
        return $this;
    }

    /**
     * @return LineItems
     */
    public function getLineItems(): LineItems
    {
        return $this->lineItems;
    }

    /**
     * @param LineItems $lineItems
     * @return Order
     */
    public function setLineItems(LineItems $lineItems): Order
    {
        $this->lineItems = $lineItems;
        return $this;
    }

    /**
     * @return ShippingLines
     */
    public function getShippingLines(): ShippingLines
    {
        return $this->shippingLines;
    }

    /**
     * @param ShippingLines $shippingLines
     * @return Order
     */
    public function setShippingLines(ShippingLines $shippingLines): Order
    {
        $this->shippingLines = $shippingLines;
        return $this;
    }

    /**
     * @return TaxLines
     */
    public function getTaxLines(): TaxLines
    {
        return $this->taxLines;
    }

    /**
     * @param TaxLines $taxLines
     * @return Order
     */
    public function setTaxLines(TaxLines $taxLines): Order
    {
        $this->taxLines = $taxLines;
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
     * @return Order
     */
    public function setCharges(Charges $charges): Order
    {
        $this->charges = $charges;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'livemode' => $this->liveMode,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'payment_status' => $this->paymentStatus,
            'amount_refunded' => $this->amountRefunded,
            'object' => $this->object,
            'id' => $this->id,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'customer_info' => $this->customerInfo->toArray(),
            'shipping_contact' => $this->shippingContact->toArray(),
            'line_items' => $this->lineItems->toArray(),
            'shipping_lines' => $this->shippingLines->toArray(),
            'tax_lines' => $this->taxLines->toArray(),
            'charges' => $this->charges->toArray(),
        ];
    }
}

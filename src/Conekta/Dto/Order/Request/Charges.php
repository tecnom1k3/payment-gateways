<?php


namespace Digitec\Conekta\Dto\Order\Request;


/**
 * Class Charges
 * @package Digitec\Conekta\Dto\Order\Request
 */
class Charges
{
    /**
     * @var int
     */
    protected int $total_amount; //int
    /**
     * @var PaymentMethod
     */
    protected PaymentMethod $payment_method;

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->total_amount;
    }

    /**
     * @param int $total_amount
     * @return Charges
     */
    public function setTotalAmount(int $total_amount): Charges
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->payment_method;
    }

    /**
     * @param PaymentMethod $payment_method
     * @return Charges
     */
    public function setPaymentMethod(PaymentMethod $payment_method): Charges
    {
        $this->payment_method = $payment_method;
        return $this;
    } //Payment_method
}

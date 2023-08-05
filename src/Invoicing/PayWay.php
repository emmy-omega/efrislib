<?php

namespace Sniper\EfrisLib\Invoicing;

class PayWay
{
    public string $paymentMode;
    public string $paymentAmount;
    public string $orderNumber;

    public static function builder(): PayWay
    {
        return new self();
    }

    /**
     * @param string $paymentMode
     * @return PayWay
     */
    public function paymentMode(string $paymentMode): PayWay
    {
        $this->paymentMode = $paymentMode;
        return $this;
    }

    /**
     * @param string $paymentAmount
     * @return PayWay
     */
    public function paymentAmount(string $paymentAmount): PayWay
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * @param string $orderNumber
     * @return PayWay
     */
    public function orderNumber(string $orderNumber): PayWay
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }


}
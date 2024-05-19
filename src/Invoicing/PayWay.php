<?php

namespace Sniper\EfrisLib\Invoicing;

class PayWay
{
    public function __construct(
        public string $paymentMode,
        public string $paymentAmount,
        public string $orderNumber)
    {
    }

}
<?php

namespace Sniper\EfrisLib\Invoicing;

use JsonSerializable;
use Sniper\EfrisLib\BaseModel;

class PayWay extends BaseModel implements JsonSerializable
{
    public function __construct(
        public string $paymentMode,
        public string $paymentAmount,
        public string $orderNumber)
    {
    }

    /**
     * @return mixed
     */
    public function jsonSerialize(): array
    {
        return [$this->paymentMode, $this->paymentAmount, $this->orderNumber];
    }
}
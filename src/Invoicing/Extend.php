<?php

namespace Sniper\EfrisLib\Invoicing;

class Extend
{
    public string $reason;
    public string $reasonCode;
    public static function builder(): PayWay
    {
        return new self();
    }

    /**
     * @param string $reason
     * @return Extend
     */
    public function reason(string $reason): Extend
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param string $reasonCode
     * @return Extend
     */
    public function reasonCode(string $reasonCode): Extend
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }


}
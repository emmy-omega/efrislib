<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class Summary
{
    public string $netAmount;
    public string $taxAmount;
    public string $grossAmount;
    public string $itemCount;
    public string $modeCode = "1";
    public string $qrCode;

    public static function builder(): Summary
    {
        return new self();
    }

    /**
     * @param string $netAmount
     * @return Summary
     */
    public function netAmount(string $netAmount): Summary
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @param string $taxAmount
     * @return Summary
     */
    public function taxAmount(string $taxAmount): Summary
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @param string $grossAmount
     * @return Summary
     */
    public function grossAmount(string $grossAmount): Summary
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @param string $itemCount
     * @return Summary
     */
    public function itemCount(string $itemCount): Summary
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * @param string $modeCode
     * @return Summary
     */
    public function modeCode(string $modeCode): Summary
    {
        $this->modeCode = $modeCode;
        return $this;
    }

    /**
     * @param string $qrCode
     * @return Summary
     */
    public function qrCode(string $qrCode): Summary
    {
        $this->qrCode = $qrCode;
        return $this;
    }


}
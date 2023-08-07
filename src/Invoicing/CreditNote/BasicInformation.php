<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class BasicInformation
{
    public string $operator;
    public string $invoiceKind;
    public string $invoiceIndustryCode;
    public string $branchId;

    public static function builder(): BasicInformation
    {
        return new self();
    }

    /**
     * @param string $operator
     * @return BasicInformation
     */
    public function operator(string $operator): BasicInformation
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @param string $invoiceKind
     * @return BasicInformation
     */
    public function invoiceKind(string $invoiceKind): BasicInformation
    {
        $this->invoiceKind = $invoiceKind;
        return $this;
    }

    /**
     * @param string $invoiceIndustryCode
     * @return BasicInformation
     */
    public function invoiceIndustryCode(string $invoiceIndustryCode): BasicInformation
    {
        $this->invoiceIndustryCode = $invoiceIndustryCode;
        return $this;
    }

    /**
     * @param string $branchId
     * @return BasicInformation
     */
    public function branchId(string $branchId): BasicInformation
    {
        $this->branchId = $branchId;
        return $this;
    }


}
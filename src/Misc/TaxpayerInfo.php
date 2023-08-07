<?php

namespace Sniper\EfrisLib\Misc;

use Sniper\EfrisLib\Payload\Data;

class TaxpayerInfo
{
    public string $tin;
    public string $ninBrn;
    public string $legalName;
    public string $businessName;
    public string $contactNumber;
    public string $contactEmail;
    public string $address;
    public string $taxpayerType;
    public string $governmentTIN;

    public static function builder(): TaxpayerInfo
    {
        return new self();
    }

    /**
     * @param string $tin
     * @return TaxpayerInfo
     */
    public function tin(string $tin): TaxpayerInfo
    {
        $this->tin = $tin;
        return $this;
    }

    /**
     * @param string $ninBrn
     * @return TaxpayerInfo
     */
    public function ninBrn(string $ninBrn): TaxpayerInfo
    {
        $this->ninBrn = $ninBrn;
        return $this;
    }

    /**
     * @param string $legalName
     * @return TaxpayerInfo
     */
    public function legalName(string $legalName): TaxpayerInfo
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @param string $businessName
     * @return TaxpayerInfo
     */
    public function businessName(string $businessName): TaxpayerInfo
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @param string $contactNumber
     * @return TaxpayerInfo
     */
    public function contactNumber(string $contactNumber): TaxpayerInfo
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * @param string $contactEmail
     * @return TaxpayerInfo
     */
    public function contactEmail(string $contactEmail): TaxpayerInfo
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @param string $address
     * @return TaxpayerInfo
     */
    public function address(string $address): TaxpayerInfo
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $taxpayerType
     * @return TaxpayerInfo
     */
    public function taxpayerType(string $taxpayerType): TaxpayerInfo
    {
        $this->taxpayerType = $taxpayerType;
        return $this;
    }

    /**
     * @param string $governmentTIN
     * @return TaxpayerInfo
     */
    public function governmentTIN(string $governmentTIN): TaxpayerInfo
    {
        $this->governmentTIN = $governmentTIN;
        return $this;
    }


}
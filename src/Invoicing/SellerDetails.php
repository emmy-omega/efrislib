<?php

namespace Sniper\EfrisLib\Invoicing;
class SellerDetails
{
    public string $tin;
    public string $ninBrn;
    public string $legalName;
    public string $businessName;
    public string $address;
    public string $mobilePhone;
    public string $linePhone;
    public string $emailAddress;
    public string $placeOfBusiness;
    public string $referenceNo;
    public string $branchId;
    public string $isCheckReference;

    public static function builder(): SellerDetails
    {
        return new self();
    }

    /**
     * @param string $tin
     * @return SellerDetails
     */
    public function tin(string $tin): SellerDetails
    {
        $this->tin = $tin;
        return $this;
    }

    /**
     * @param string $ninBrn
     * @return SellerDetails
     */
    public function ninBrn(string $ninBrn): SellerDetails
    {
        $this->ninBrn = $ninBrn;
        return $this;
    }

    /**
     * @param string $legalName
     * @return SellerDetails
     */
    public function legalName(string $legalName): SellerDetails
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @param string $businessName
     * @return SellerDetails
     */
    public function businessName(string $businessName): SellerDetails
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @param string $address
     * @return SellerDetails
     */
    public function address(string $address): SellerDetails
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $mobilePhone
     * @return SellerDetails
     */
    public function mobilePhone(string $mobilePhone): SellerDetails
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @param string $linePhone
     * @return SellerDetails
     */
    public function linePhone(string $linePhone): SellerDetails
    {
        $this->linePhone = $linePhone;
        return $this;
    }

    /**
     * @param string $emailAddress
     * @return SellerDetails
     */
    public function emailAddress(string $emailAddress): SellerDetails
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @param string $placeOfBusiness
     * @return SellerDetails
     */
    public function placeOfBusiness(string $placeOfBusiness): SellerDetails
    {
        $this->placeOfBusiness = $placeOfBusiness;
        return $this;
    }

    /**
     * @param string $referenceNo
     * @return SellerDetails
     */
    public function referenceNo(string $referenceNo): SellerDetails
    {
        $this->referenceNo = $referenceNo;
        return $this;
    }

    /**
     * @param string $branchId
     * @return SellerDetails
     */
    public function branchId(string $branchId): SellerDetails
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @param string $isCheckReference
     * @return SellerDetails
     */
    public function isCheckReference(string $isCheckReference): SellerDetails
    {
        $this->isCheckReference = $isCheckReference;
        return $this;
    }


}
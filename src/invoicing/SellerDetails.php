<?php

namespace invoicing;
class SellerDetails
{
    private string $tin;
    private string $ninBrn;
    private string $legalName;
    private string $businessName;
    private string $address;
    private string $mobilePhone;
    private string $linePhone;
    private string $emailAddress;
    private string $placeOfBusiness;
    private string $referenceNo;
    private string $branchId;
    private string $isCheckReference;

    public function __construct(string $tin, string $legalName, string $emailAddress, string $branchId)
    {
        $this->tin = $tin;
        $this->legalName = $legalName;
        $this->emailAddress = $emailAddress;
        $this->branchId = $branchId;
    }

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return SellerDetails
     */
    public function setTin(string $tin): SellerDetails
    {
        $this->tin = $tin;
        return $this;
    }

    /**
     * @return string
     */
    public function getNinBrn(): string
    {
        return $this->ninBrn;
    }

    /**
     * @param string $ninBrn
     * @return SellerDetails
     */
    public function setNinBrn(string $ninBrn): SellerDetails
    {
        $this->ninBrn = $ninBrn;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return SellerDetails
     */
    public function setLegalName(string $legalName): SellerDetails
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName(): string
    {
        return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return SellerDetails
     */
    public function setBusinessName(string $businessName): SellerDetails
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return SellerDetails
     */
    public function setAddress(string $address): SellerDetails
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return SellerDetails
     */
    public function setMobilePhone(string $mobilePhone): SellerDetails
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinePhone(): string
    {
        return $this->linePhone;
    }

    /**
     * @param string $linePhone
     * @return SellerDetails
     */
    public function setLinePhone(string $linePhone): SellerDetails
    {
        $this->linePhone = $linePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return SellerDetails
     */
    public function setEmailAddress(string $emailAddress): SellerDetails
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceOfBusiness(): string
    {
        return $this->placeOfBusiness;
    }

    /**
     * @param string $placeOfBusiness
     * @return SellerDetails
     */
    public function setPlaceOfBusiness(string $placeOfBusiness): SellerDetails
    {
        $this->placeOfBusiness = $placeOfBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNo(): string
    {
        return $this->referenceNo;
    }

    /**
     * @param string $referenceNo
     * @return SellerDetails
     */
    public function setReferenceNo(string $referenceNo): SellerDetails
    {
        $this->referenceNo = $referenceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }

    /**
     * @param string $branchId
     * @return SellerDetails
     */
    public function setBranchId(string $branchId): SellerDetails
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsCheckReference(): string
    {
        return $this->isCheckReference;
    }

    /**
     * @param string $isCheckReference
     * @return SellerDetails
     */
    public function setIsCheckReference(string $isCheckReference): SellerDetails
    {
        $this->isCheckReference = $isCheckReference;
        return $this;
    }


}
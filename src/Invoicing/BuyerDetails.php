<?php

namespace Sniper\EfrisLib\Invoicing;
class BuyerDetails
{
    public string $buyerTin;
    public string $buyerNinBrn;
    public string $buyerPassport;
    public string $buyerLegalName;
    public string $buyerBusinessName;
    public string $buyerAddress;
    public string $buyerEmail;
    public string $buyerMobilePhone;
    public string $buyerLinePhone;
    public string $buyerPlaceOfBusiness;
    public string $buyerCitizenship;
    public string $buyerSector;
    public string $buyerReferenceNo;
    public string $buyerType = "0";

    public static function builder(): BuyerDetails
    {
        return new self();
    }

    /**
     * @param string $buyerTin
     * @return BuyerDetails
     */
    public function buyerTin(string $buyerTin): BuyerDetails
    {
        $this->buyerTin = $buyerTin;
        return $this;
    }

    /**
     * @param string $buyerNinBrn
     * @return BuyerDetails
     */
    public function buyerNinBrn(string $buyerNinBrn): BuyerDetails
    {
        $this->buyerNinBrn = $buyerNinBrn;
        return $this;
    }

    /**
     * @param string $buyerPassport
     * @return BuyerDetails
     */
    public function buyerPassport(string $buyerPassport): BuyerDetails
    {
        $this->buyerPassport = $buyerPassport;
        return $this;
    }

    /**
     * @param string $buyerLegalName
     * @return BuyerDetails
     */
    public function buyerLegalName(string $buyerLegalName): BuyerDetails
    {
        $this->buyerLegalName = $buyerLegalName;
        return $this;
    }

    /**
     * @param string $buyerBusinessName
     * @return BuyerDetails
     */
    public function buyerBusinessName(string $buyerBusinessName): BuyerDetails
    {
        $this->buyerBusinessName = $buyerBusinessName;
        return $this;
    }

    /**
     * @param string $buyerAddress
     * @return BuyerDetails
     */
    public function buyerAddress(string $buyerAddress): BuyerDetails
    {
        $this->buyerAddress = $buyerAddress;
        return $this;
    }

    /**
     * @param string $buyerEmail
     * @return BuyerDetails
     */
    public function buyerEmail(string $buyerEmail): BuyerDetails
    {
        $this->buyerEmail = $buyerEmail;
        return $this;
    }

    /**
     * @param string $buyerMobilePhone
     * @return BuyerDetails
     */
    public function buyerMobilePhone(string $buyerMobilePhone): BuyerDetails
    {
        $this->buyerMobilePhone = $buyerMobilePhone;
        return $this;
    }

    /**
     * @param string $buyerLinePhone
     * @return BuyerDetails
     */
    public function buyerLinePhone(string $buyerLinePhone): BuyerDetails
    {
        $this->buyerLinePhone = $buyerLinePhone;
        return $this;
    }

    /**
     * @param string $buyerPlaceOfBusiness
     * @return BuyerDetails
     */
    public function buyerPlaceOfBusiness(string $buyerPlaceOfBusiness): BuyerDetails
    {
        $this->buyerPlaceOfBusiness = $buyerPlaceOfBusiness;
        return $this;
    }

    /**
     * @param string $buyerCitizenship
     * @return BuyerDetails
     */
    public function buyerCitizenship(string $buyerCitizenship): BuyerDetails
    {
        $this->buyerCitizenship = $buyerCitizenship;
        return $this;
    }

    /**
     * @param string $buyerSector
     * @return BuyerDetails
     */
    public function buyerSector(string $buyerSector): BuyerDetails
    {
        $this->buyerSector = $buyerSector;
        return $this;
    }

    /**
     * @param string $buyerReferenceNo
     * @return BuyerDetails
     */
    public function buyerReferenceNo(string $buyerReferenceNo): BuyerDetails
    {
        $this->buyerReferenceNo = $buyerReferenceNo;
        return $this;
    }

    /**
     * @param string $buyerType
     * @return BuyerDetails
     */
    public function buyerType(string $buyerType): BuyerDetails
    {
        $this->buyerType = $buyerType;
        return $this;
    }


}
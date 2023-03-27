<?php

namespace invoicing;
class BuyerDetails
{
    private string $buyerTin;
    private string $buyerNinBrn;
    private string $buyerPassport;
    private string $buyerLegalName;
    private string $buyerBusinessName;
    private string $buyerAddress;
    private string $buyerEmail;
    private string $buyerMobilePhone;
    private string $buyerLinePhone;
    private string $buyerPlaceOfBusiness;
    private string $buyerCitizenship;
    private string $buyerSector;
    private string $buyerReferenceNo;

    public function __construct(private string $buyerType)
    {
    }

    /**
     * @return string
     */
    public function getBuyerTin(): string
    {
        return $this->buyerTin;
    }

    /**
     * @param string $buyerTin
     * @return BuyerDetails
     */
    public function setBuyerTin(string $buyerTin): BuyerDetails
    {
        $this->buyerTin = $buyerTin;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerNinBrn(): string
    {
        return $this->buyerNinBrn;
    }

    /**
     * @param string $buyerNinBrn
     * @return BuyerDetails
     */
    public function setBuyerNinBrn(string $buyerNinBrn): BuyerDetails
    {
        $this->buyerNinBrn = $buyerNinBrn;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerPassport(): string
    {
        return $this->buyerPassport;
    }

    /**
     * @param string $buyerPassport
     * @return BuyerDetails
     */
    public function setBuyerPassport(string $buyerPassport): BuyerDetails
    {
        $this->buyerPassport = $buyerPassport;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLegalName(): string
    {
        return $this->buyerLegalName;
    }

    /**
     * @param string $buyerLegalName
     * @return BuyerDetails
     */
    public function setBuyerLegalName(string $buyerLegalName): BuyerDetails
    {
        $this->buyerLegalName = $buyerLegalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerBusinessName(): string
    {
        return $this->buyerBusinessName;
    }

    /**
     * @param string $buyerBusinessName
     * @return BuyerDetails
     */
    public function setBuyerBusinessName(string $buyerBusinessName): BuyerDetails
    {
        $this->buyerBusinessName = $buyerBusinessName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerAddress(): string
    {
        return $this->buyerAddress;
    }

    /**
     * @param string $buyerAddress
     * @return BuyerDetails
     */
    public function setBuyerAddress(string $buyerAddress): BuyerDetails
    {
        $this->buyerAddress = $buyerAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerEmail(): string
    {
        return $this->buyerEmail;
    }

    /**
     * @param string $buyerEmail
     * @return BuyerDetails
     */
    public function setBuyerEmail(string $buyerEmail): BuyerDetails
    {
        $this->buyerEmail = $buyerEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerMobilePhone(): string
    {
        return $this->buyerMobilePhone;
    }

    /**
     * @param string $buyerMobilePhone
     * @return BuyerDetails
     */
    public function setBuyerMobilePhone(string $buyerMobilePhone): BuyerDetails
    {
        $this->buyerMobilePhone = $buyerMobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLinePhone(): string
    {
        return $this->buyerLinePhone;
    }

    /**
     * @param string $buyerLinePhone
     * @return BuyerDetails
     */
    public function setBuyerLinePhone(string $buyerLinePhone): BuyerDetails
    {
        $this->buyerLinePhone = $buyerLinePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerPlaceOfBusiness(): string
    {
        return $this->buyerPlaceOfBusiness;
    }

    /**
     * @param string $buyerPlaceOfBusiness
     * @return BuyerDetails
     */
    public function setBuyerPlaceOfBusiness(string $buyerPlaceOfBusiness): BuyerDetails
    {
        $this->buyerPlaceOfBusiness = $buyerPlaceOfBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerCitizenship(): string
    {
        return $this->buyerCitizenship;
    }

    /**
     * @param string $buyerCitizenship
     * @return BuyerDetails
     */
    public function setBuyerCitizenship(string $buyerCitizenship): BuyerDetails
    {
        $this->buyerCitizenship = $buyerCitizenship;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerSector(): string
    {
        return $this->buyerSector;
    }

    /**
     * @param string $buyerSector
     * @return BuyerDetails
     */
    public function setBuyerSector(string $buyerSector): BuyerDetails
    {
        $this->buyerSector = $buyerSector;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerReferenceNo(): string
    {
        return $this->buyerReferenceNo;
    }

    /**
     * @param string $buyerReferenceNo
     * @return BuyerDetails
     */
    public function setBuyerReferenceNo(string $buyerReferenceNo): BuyerDetails
    {
        $this->buyerReferenceNo = $buyerReferenceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerType(): string
    {
        return $this->buyerType;
    }

    /**
     * @param string $buyerType
     * @return BuyerDetails
     */
    public function setBuyerType(string $buyerType): BuyerDetails
    {
        $this->buyerType = $buyerType;
        return $this;
    }


}
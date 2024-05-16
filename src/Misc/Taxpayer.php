<?php

namespace Sniper\EfrisLib\Misc;

use JsonSerializable;
use Sniper\EfrisLib\Misc\Enums\TaxpayerType;

class Taxpayer implements JsonSerializable
{
    public function __construct(
        public string       $tin,
        public string       $ninBrn,
        public string       $legalName,
        public string       $businessName,
        public string       $contactNumber,
        public string       $contactEmail,
        public string       $address,
        public TaxpayerType $taxpayerType,
        public string       $governmentTIN)
    {
    }

    /**
     * @param string $tin
     * @return Taxpayer
     */
    public function tin(string $tin): Taxpayer
    {
        $this->tin = $tin;
        return $this;
    }

    /**
     * @param string $ninBrn
     * @return Taxpayer
     */
    public function ninBrn(string $ninBrn): Taxpayer
    {
        $this->ninBrn = $ninBrn;
        return $this;
    }

    /**
     * @param string $legalName
     * @return Taxpayer
     */
    public function legalName(string $legalName): Taxpayer
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @param string $businessName
     * @return Taxpayer
     */
    public function businessName(string $businessName): Taxpayer
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @param string $contactNumber
     * @return Taxpayer
     */
    public function contactNumber(string $contactNumber): Taxpayer
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * @param string $contactEmail
     * @return Taxpayer
     */
    public function contactEmail(string $contactEmail): Taxpayer
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @param string $address
     * @return Taxpayer
     */
    public function address(string $address): Taxpayer
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param TaxpayerType $taxpayerType
     * @return Taxpayer
     */
    public function taxpayerType(TaxpayerType $taxpayerType): Taxpayer
    {
        $this->taxpayerType = $taxpayerType;
        return $this;
    }

    /**
     * @param string $governmentTIN
     * @return Taxpayer
     */
    public function governmentTIN(string $governmentTIN): Taxpayer
    {
        $this->governmentTIN = $governmentTIN;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'tin' => $this->tin,
            'ninBrn' => $this->ninBrn,
            'legalName' => $this->legalName,
            'businessName' => $this->businessName,
            'contactNumber' => $this->contactNumber,
            'contactEmail' => $this->contactEmail,
            '$address' => $this->address,
            'taxpayerType' => $this->taxpayerType->jsonSerialize(),
            'governmentTIN' => $this->governmentTIN,
        ];
    }

    public static function fromJson(array $jsonData): self
    {
        return new self($jsonData['tin'], $jsonData['ninBrn'], $jsonData['legalName'], $jsonData['businessName'], $jsonData['contactNumber'], $jsonData['contactEmail'], $jsonData['address'], TaxpayerType::fromJson($jsonData['taxpayerType']), $jsonData['governmentTIN']);
    }
}
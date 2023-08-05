<?php

namespace Sniper\EfrisLib\Invoicing;

class TaxDetails
{
    public string $taxCategory;
    public string $taxCategoryCode;
    public string $netAmount;
    public string $taxAmount;
    public string $grossAmount;
    public string $taxRate;
    public string $exciseUnit;
    public string $exciseCurrency;
    public string $taxRateName;

    public static function builder(): TaxDetails
    {
        return new self();
    }

    /**
     * @param string $taxCategory
     * @return TaxDetails
     */
    public function taxCategory(string $taxCategory): TaxDetails
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * @param string $taxCategoryCode
     * @return TaxDetails
     */
    public function taxCategoryCode(string $taxCategoryCode): TaxDetails
    {
        $this->taxCategoryCode = $taxCategoryCode;
        return $this;
    }

    /**
     * @param string $netAmount
     * @return TaxDetails
     */
    public function netAmount(string $netAmount): TaxDetails
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @param string $taxAmount
     * @return TaxDetails
     */
    public function taxAmount(string $taxAmount): TaxDetails
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @param string $grossAmount
     * @return TaxDetails
     */
    public function grossAmount(string $grossAmount): TaxDetails
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @param string $taxRate
     * @return TaxDetails
     */
    public function taxRate(string $taxRate): TaxDetails
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @param string $exciseUnit
     * @return TaxDetails
     */
    public function exciseUnit(string $exciseUnit): TaxDetails
    {
        $this->exciseUnit = $exciseUnit;
        return $this;
    }

    /**
     * @param string $exciseCurrency
     * @return TaxDetails
     */
    public function exciseCurrency(string $exciseCurrency): TaxDetails
    {
        $this->exciseCurrency = $exciseCurrency;
        return $this;
    }

    /**
     * @param string $taxRateName
     * @return TaxDetails
     */
    public function taxRateName(string $taxRateName): TaxDetails
    {
        $this->taxRateName = $taxRateName;
        return $this;
    }


}
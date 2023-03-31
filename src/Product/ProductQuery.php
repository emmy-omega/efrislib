<?php

namespace Sniper\EfrisLib\Product;

class ProductQuery
{
    public string $goodsCode;
    public string $goodsName;
    public string $commodityCategoryName;
    public string $pageNo = "1";
    public string $pageSize ="10";
    public string $branchId;
    public string $serviceMark;
    public string $haveExciseTax;
    public string $startDate;
    public string $endDate;
    public string $combineKeywords;
    public string $goodsTypeCode = "101";

    public static function build(): self
    {
        return new self();
    }

    /**
     * @param string $goodsCode
     * @return ProductQuery
     */
    public function goodsCode(string $goodsCode): ProductQuery
    {
        $this->goodsCode = $goodsCode;
        return $this;
    }

    /**
     * @param string $goodsName
     * @return ProductQuery
     */
    public function goodsName(string $goodsName): ProductQuery
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    /**
     * @param string $commodityCategoryName
     * @return ProductQuery
     */
    public function commodityCategoryName(string $commodityCategoryName): ProductQuery
    {
        $this->commodityCategoryName = $commodityCategoryName;
        return $this;
    }

    /**
     * @param string $pageNo
     * @return ProductQuery
     */
    public function pageNo(string $pageNo): ProductQuery
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @param string $pageSize
     * @return ProductQuery
     */
    public function pageSize(string $pageSize): ProductQuery
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param string $branchId
     * @return ProductQuery
     */
    public function branchId(string $branchId): ProductQuery
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @param string $serviceMark
     * @return ProductQuery
     */
    public function serviceMark(string $serviceMark): ProductQuery
    {
        $this->serviceMark = $serviceMark;
        return $this;
    }

    /**
     * @param string $haveExciseTax
     * @return ProductQuery
     */
    public function haveExciseTax(string $haveExciseTax): ProductQuery
    {
        $this->haveExciseTax = $haveExciseTax;
        return $this;
    }

    /**
     * @param string $startDate
     * @return ProductQuery
     */
    public function startDate(string $startDate): ProductQuery
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @param string $endDate
     * @return ProductQuery
     */
    public function endDate(string $endDate): ProductQuery
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @param string $combineKeywords
     * @return ProductQuery
     */
    public function combineKeywords(string $combineKeywords): ProductQuery
    {
        $this->combineKeywords = $combineKeywords;
        return $this;
    }

    /**
     * @param string $goodsTypeCode
     * @return ProductQuery
     */
    public function goodsTypeCode(string $goodsTypeCode): ProductQuery
    {
        $this->goodsTypeCode = $goodsTypeCode;
        return $this;
    }


}
<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class StockIn
{
    public string $operationType;
    public string $supplierTin;
    public string $supplierName;
    public string $adjustType;
    public string $remarks;
    public string $stockInDate;
    public string $stockInType;
    public string $productionBatchNo;
    public string $productionDate;
    public string $branchId;
    public string $invoiceNo;
    public string $isCheckBatchNo;
    public string $rollBackIfError;
    public string $goodsTypeCode;

    public static function build(): StockIn
    {
        return new self();
    }

    /**
     * @param string $operationType
     * @return StockIn
     */
    public function operationType(string $operationType): StockIn
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @param string $supplierTin
     * @return StockIn
     */
    public function supplierTin(string $supplierTin): StockIn
    {
        $this->supplierTin = $supplierTin;
        return $this;
    }

    /**
     * @param string $supplierName
     * @return StockIn
     */
    public function supplierName(string $supplierName): StockIn
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    /**
     * @param string $adjustType
     * @return StockIn
     */
    public function adjustType(string $adjustType): StockIn
    {
        $this->adjustType = $adjustType;
        return $this;
    }

    /**
     * @param string $remarks
     * @return StockIn
     */
    public function remarks(string $remarks): StockIn
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @param string $stockInDate
     * @return StockIn
     */
    public function stockInDate(string $stockInDate): StockIn
    {
        $this->stockInDate = $stockInDate;
        return $this;
    }

    /**
     * @param string $stockInType
     * @return StockIn
     */
    public function stockInType(string $stockInType): StockIn
    {
        $this->stockInType = $stockInType;
        return $this;
    }

    /**
     * @param string $productionBatchNo
     * @return StockIn
     */
    public function productionBatchNo(string $productionBatchNo): StockIn
    {
        $this->productionBatchNo = $productionBatchNo;
        return $this;
    }

    /**
     * @param string $productionDate
     * @return StockIn
     */
    public function productionDate(string $productionDate): StockIn
    {
        $this->productionDate = $productionDate;
        return $this;
    }

    /**
     * @param string $branchId
     * @return StockIn
     */
    public function branchId(string $branchId): StockIn
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @param string $invoiceNo
     * @return StockIn
     */
    public function invoiceNo(string $invoiceNo): StockIn
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @param string $isCheckBatchNo
     * @return StockIn
     */
    public function isCheckBatchNo(string $isCheckBatchNo): StockIn
    {
        $this->isCheckBatchNo = $isCheckBatchNo;
        return $this;
    }

    /**
     * @param string $rollBackIfError
     * @return StockIn
     */
    public function rollBackIfError(string $rollBackIfError): StockIn
    {
        $this->rollBackIfError = $rollBackIfError;
        return $this;
    }

    /**
     * @param string $goodsTypeCode
     * @return StockIn
     */
    public function goodsTypeCode(string $goodsTypeCode): StockIn
    {
        $this->goodsTypeCode = $goodsTypeCode;
        return $this;
    }


}
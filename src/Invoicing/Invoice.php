<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Payload\Data;

class Invoice
{
    public function __construct(
        public SellerDetails       $sellerDetails,
        public BasicInformation    $basicInformation,
        public BuyerDetails        $buyerDetails,
        public Summary             $summary,
        public Extend              $extend,
        public array               $airLineGoodsDetails=[],
        public array               $edcDetails=[],
        public ?ImportServiceSeller $importServiceSeller=null,
        public ?BuyerExtend         $buyerExtend=null,
        public array               $goodsDetails = array(),
        public array               $taxDetails = array(),
        public array               $payWay = array())
    {
    }


    /**
     * @param string $legalName
     * @param string $email
     * @param string $buyerType
     * @param string $tin
     * @return $this
     */
    public function buyerDetails(string $legalName, string $email, string $buyerType = "1", string $tin = ""): Invoice
    {
        $this->buyerDetails = new BuyerDetails($legalName, $email, $buyerType, $tin);
        return $this;
    }

    /**
     * @param string $tin
     * @param string $legalName
     * @param string $emailAddress
     * @param string $branchId
     * @return $this
     */
    public function sellerDetails(string $tin, string $legalName, string $emailAddress, string $branchId): Invoice
    {
        $this->sellerDetails = new SellerDetails(tin: $tin, legalName: $legalName,emailAddress: $emailAddress);
        return $this;
    }

    /**
     * @param string $deviceNo
     * @param string $issuedDate
     * @param string $operator
     * @param string $invoiceType
     * @param string $invoiceKind
     * @param string $dataSource
     * @return $this
     */
    public function basicInformation(string $deviceNo, string $issuedDate, string $operator, string $invoiceType, string $invoiceKind, string $dataSource): Invoice
    {
        $this->basicInformation = new BasicInformation(deviceNo: $deviceNo,issuedDate: $issuedDate, operator: $operator);
        return $this;
    }

    public function addGoodDetails(string $item, string $itemCode, string $qty, string $unitPrice, string $total, string $unitOfMeasure, string $taxRate, string $tax,
                                   string $orderNumber, string $discountFlag, string $exciseFlag, string $goodsCategoryId): Invoice
    {
        $this->goodsDetails[] = new GoodsDetails(item: $item, itemCode: $item, total: $total, tax: $tax, goodsCategoryId: $goodsCategoryId, taxRate: $taxRate, qty: $qty, unitOfMeasure: $unitOfMeasure, unitPrice: $unitPrice);
        return $this;
    }

    public function addTaxDetails(string $taxCategoryCode, string $grossAmount, string $taxAmount, string $netAmount, string $taxRate): Invoice
    {
        $this->taxDetails[] = new TaxDetails(netAmount: $netAmount, taxAmount: $taxAmount, grossAmount: $grossAmount, taxCategoryCode: $taxCategoryCode, taxRate: $taxRate);;
        return $this;
    }

    public function addPayWay(string $paymentMode, string $paymentAmount, string $orderNumber): Invoice
    {
        $this->payWay[] = new PayWay(paymentMode: $paymentMode, paymentAmount: $paymentAmount, orderNumber: $orderNumber);
        return $this;
    }
}
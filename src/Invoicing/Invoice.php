<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Payload\Data;

class Invoice
{
    public SellerDetails $sellerDetails;
    public BasicInformation $basicInformation;
    public BuyerDetails $buyerDetails;
    public BuyerExtend $buyerExtend;

    public Summary $summary;
    /**
     * @var array<GoodDetails>
     */
    public array $goodsDetails = array();
    /**
     * @var array<TaxDetails>
     */
    public array $taxDetails = array();
    /**
     * @var array<PayWay>
     */
    public array $payWay = array();
    public Extend $extend;
    public ImportServiceSeller $importServiceSeller;
    public array $airLineGoodsDetails;
    public array $edcDetails;

    public static function builder(): Invoice
    {
        return new self();
    }

    /**
     * @param Summary $summary
     * @return Invoice
     */
    public function summary(Summary $summary): Invoice
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @param $legalName
     * @param $email
     * @param string $buyerType
     * @param $tin
     * @return $this
     */
    public function buyerDetails(string $legalName, string $email, string $buyerType = "0", string $tin = null): Invoice
    {
        $this->buyerDetails = BuyerDetails::builder()->buyerLegalName($legalName)
            ->buyerEmail($email)->buyerType($buyerType)->buyerTin($tin);
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
        $this->sellerDetails = SellerDetails::builder()->tin($tin)->legalName($legalName)
            ->emailAddress($emailAddress)->branchId($branchId);
        return $this;
    }

    /**
     * @param string $deviceNo
     * @param string $issueDate
     * @param string $operator
     * @param string $invoiceType
     * @param string $invoiceKind
     * @param string $dataSource
     * @return $this
     */
    public function basicInformation(string $deviceNo, string $issueDate, string $operator, string $invoiceType, string $invoiceKind, string $dataSource): Invoice
    {
        $this->basicInformation = BasicInformation::builder()->deviceNo($deviceNo)->issuedDate($issueDate)
            ->operator($operator)->invoiceType($invoiceType)->invoiceKind($invoiceKind)->dataSource($dataSource);
        return $this;
    }

    public function addGoodDetails(string $item, string $itemCode, string $qty, string $total, string $taxRate, string $tax,
                                string $orderNumber, string $discountFlag, string $exciseFlag, string $goodsCategoryId): Invoice
    {
        $this->goodsDetails[] = GoodDetails::builder()->item($item)->itemCode($itemCode)->qty($qty)->total($total)
            ->taxRate($taxRate)->tax($tax)->orderNumber($orderNumber)->discountFlag($discountFlag)->exciseFlag($exciseFlag)
            ->goodsCategoryId($goodsCategoryId);
        return $this;
    }

    public function addTaxDetails(string $taxCategoryCode, string $grossAmount, string $taxAmount, string $netAmount, string $taxRate): Invoice
    {
        $this->taxDetails[] = TaxDetails::builder()->taxCategoryCode($taxCategoryCode)->grossAmount($grossAmount)
            ->taxAmount($taxAmount)->netAmount($netAmount)->taxRate($taxRate);
        return $this;
    }

    public function addPayWay(string $paymentMode, string $paymentAmount, string $orderNumber): Invoice
    {
        $this->payWay[] = PayWay::builder()->paymentMode($paymentMode)->paymentAmount($paymentAmount)->orderNumber($orderNumber);
        return $this;
    }
}
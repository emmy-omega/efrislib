<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

use Sniper\EfrisLib\Invoicing\BuyerDetails;
use Sniper\EfrisLib\Invoicing\CreditNote\GoodsDetails;
use Sniper\EfrisLib\Invoicing\ImportServiceSeller;
use Sniper\EfrisLib\Invoicing\Invoice;
use Sniper\EfrisLib\Invoicing\PayWay;
use Sniper\EfrisLib\Invoicing\Summary;
use Sniper\EfrisLib\Invoicing\TaxDetails;
use Sniper\EfrisLib\Payload\Payload;

class CreditNote
{
    public string $oriInvoiceId;
    public string $oriInvoiceNo;
    public string $reason;
    public string $reasonCode;
    public string $applicationTime;
    public string $invoiceApplyCategoryCode = "101";
    public string $currency;
    public string $contactName;
    public string $contactMobileNum;
    public string $contactEmail;
    public string $source = "103";
    public string $remarks;
    public string $sellersReferenceNo;
    /**
     * @var array<GoodsDetails>
     */
    public array $goodsDetails = array();
    /**
     * @var array<TaxDetails>
    */
    public array $taxDetails = array();
    public Summary $summary;
    /**
     * @var array<PayWay>
    */
    public array $payWay = array();
    public BuyerDetails $buyerDetails;
    public ImportServiceSeller $importServiceSeller;
    public BasicInformation $basicInformation;
    /**
     * @var array<AttachmentList>
    */
    public array $attachmentList;

    public function __construct(string $reasonCode, string $applicationTime, string $currency)
    {
        $this->reasonCode = $reasonCode;
        $this->applicationTime = $applicationTime;
        $this->currency = $currency;
    }

    public static function build(string $reasonCode, string $applicationTime, string $currency): CreditNote
    {
        return new self($reasonCode, $applicationTime, $currency);
    }

    /**
     * @param string $legalName
     * @param string $email
     * @param string $buyerType
     * @param string $tin
     * @return CreditNote
     */
    public function buyerDetails(string $legalName, string $email, string $buyerType = "1", string $tin = ""): CreditNote
    {
        $this->buyerDetails = BuyerDetails::builder()->buyerLegalName($legalName)
            ->buyerEmail($email)->buyerType($buyerType)->buyerTin($tin);
        return $this;
    }

    /**
     * @param Summary $summary
     * @return CreditNote
     */
    public function summary(Summary $summary): CreditNote
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @param string $item
     * @param string $itemCode
     * @param string $qty
     * @param string $unitPrice
     * @param string $total
     * @param string $unitOfMeasure
     * @param string $taxRate
     * @param string $tax
     * @param string $orderNumber
     * @param string $discountFlag
     * @param string $exciseFlag
     * @param string $goodsCategoryId
     * @return $this
     */
    public function addGoodDetails(string $item, string $itemCode, string $qty, string $unitPrice, string $total, string $unitOfMeasure, string $taxRate, string $tax,
                                   string $orderNumber, string $deemedFlag, string $exciseFlag, string $goodsCategoryId): CreditNote
    {
        $this->goodsDetails[] = GoodsDetails::builder()->item($item)->itemCode($itemCode)->qty($qty)->unitPrice($unitPrice)->total($total)
            ->unitOfMeasure($unitOfMeasure)
            ->taxRate($taxRate)->tax($tax)->orderNumber($orderNumber)->deemedFlag($deemedFlag)->exciseFlag($exciseFlag)
            ->goodsCategoryId($goodsCategoryId);
        return $this;
    }

    /**
     * @param string $taxCategoryCode
     * @param string $grossAmount
     * @param string $taxAmount
     * @param string $netAmount
     * @param string $taxRate
     * @return $this
     */
    public function addTaxDetails(string $taxCategoryCode, string $grossAmount, string $taxAmount, string $netAmount, string $taxRate): CreditNote
    {
        $this->taxDetails[] = TaxDetails::builder()->taxCategoryCode($taxCategoryCode)->grossAmount($grossAmount)
            ->taxAmount($taxAmount)->netAmount($netAmount)->taxRate($taxRate);
        return $this;
    }

    /**
     * @param string $paymentMode
     * @param string $paymentAmount
     * @param string $orderNumber
     * @return Invoice
     */
    public function addPayWay(string $paymentMode, string $paymentAmount, string $orderNumber): CreditNote
    {
        $this->payWay[] = PayWay::builder()->paymentMode($paymentMode)->paymentAmount($paymentAmount)->orderNumber($orderNumber);
        return $this;
    }

    public function addAttachment(string $fileName, string $fileType, string $fileContent): CreditNote
    {
        $this->attachmentList[] = AttachmentList::builder()->fileName($fileName)->fileType($fileType)->fileContent($fileContent);
        return $this;
    }

    /**
     * @param string $oriInvoiceId
     * @return CreditNote
     */
    public function oriInvoiceId(string $oriInvoiceId): CreditNote
    {
        $this->oriInvoiceId = $oriInvoiceId;
        return $this;
    }

    /**
     * @param string $oriInvoiceNo
     * @return CreditNote
     */
    public function oriInvoiceNo(string $oriInvoiceNo): CreditNote
    {
        $this->oriInvoiceNo = $oriInvoiceNo;
        return $this;
    }

    /**
     * @param string $reason
     * @return CreditNote
     */
    public function reason(string $reason): CreditNote
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param string $reasonCode
     * @return CreditNote
     */
    public function reasonCode(string $reasonCode): CreditNote
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @param string $applicationTime
     * @return CreditNote
     */
    public function applicationTime(string $applicationTime): CreditNote
    {
        $this->applicationTime = $applicationTime;
        return $this;
    }

    /**
     * @param string $invoiceApplyCategoryCode
     * @return CreditNote
     */
    public function invoiceApplyCategoryCode(string $invoiceApplyCategoryCode): CreditNote
    {
        $this->invoiceApplyCategoryCode = $invoiceApplyCategoryCode;
        return $this;
    }

    /**
     * @param string $currency
     * @return CreditNote
     */
    public function currency(string $currency): CreditNote
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string $contactName
     * @return CreditNote
     */
    public function contactName(string $contactName): CreditNote
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @param string $contactMobileNum
     * @return CreditNote
     */
    public function contactMobileNum(string $contactMobileNum): CreditNote
    {
        $this->contactMobileNum = $contactMobileNum;
        return $this;
    }

    /**
     * @param string $contactEmail
     * @return CreditNote
     */
    public function contactEmail(string $contactEmail): CreditNote
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @param string $source
     * @return CreditNote
     */
    public function source(string $source): CreditNote
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @param string $remarks
     * @return CreditNote
     */
    public function remarks(string $remarks): CreditNote
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @param string $sellersReferenceNo
     * @return CreditNote
     */
    public function sellersReferenceNo(string $sellersReferenceNo): CreditNote
    {
        $this->sellersReferenceNo = $sellersReferenceNo;
        return $this;
    }

    /**
     * @param ImportServiceSeller $importServiceSeller
     * @return CreditNote
     */
    public function importServiceSeller(ImportServiceSeller $importServiceSeller): CreditNote
    {
        $this->importServiceSeller = $importServiceSeller;
        return $this;
    }

    /**
     * @param string $operator
     * @param string $invoiceKind
     * @return CreditNote
     */
    public function basicInformation(string $operator, string $invoiceKind): CreditNote
    {
        $this->basicInformation = BasicInformation::builder()->operator($operator)->invoiceKind($invoiceKind);
        return $this;
    }


}
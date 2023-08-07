<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

use Sniper\EfrisLib\Invoicing\BuyerDetails;
use Sniper\EfrisLib\Invoicing\ImportServiceSeller;
use Sniper\EfrisLib\Invoicing\Summary;

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
     * @var array<GoodDetails>
     */
    public array $goodDetails;
    /**
     * @var array<TaxDetails>
    */
    public array $taxDetails;
    public Summary $summary;
    /**
     * @var array<PayWay>
    */
    public array $payWay;
    public BuyerDetails $buyerDetails;
    public ImportServiceSeller $importServiceSeller;
    public BasicInformation $basicInformation;
    /**
     * @var array<AttachmentList>
    */
    public array $attachmentList;
}
<?php

namespace Sniper\EfrisLib\Response\Invoice\CreditNote;

class CreditNoteResponse
{
    public function __construct(
        public string $referenceNo,
        public string $id,
        public string $oriInvoiceNo,
        public string $oriInvoiceId,
        public string $refundInvoiceNo,
        public string $reason,
        public string $selectRefundReasonCode,
        public string $approveStatusCode,
        public string $updateTime,
        public string $applicationTime,
        public string $invoiceApplyCategoryCode,
        public string $contactName,
        public string $contactMobileNum,
        public string $contactEmail,
        public string $source,
        public string $taskId,
        public string $grossAmount,
        public string $totalAmount,
        public string $currency,
        public string $refundIssuedDate,
        public string $issuedDate,
        public string $tin,
        public string $sellersReferenceNo,
        public string $nin,
        public string $legalName,
        public string $businessName,
        public string $mobilePhone,
        public string $address,
        public string $emailAddress,
        public string $buyerTin,
        public string $buyerLegalName,
        public string $buyerAddress,
        public string $buyerEmailAddress,
        public string $buyerMobilePhone,
        public string $buyerLinePhone,
        public string $buyerCitizenship,
        public string $buyerPassportNumber,
        public string $buyerPlaceOfBusi,
        public array  $attachmentList = array(),
        public ?string $remarks = null,
        public ?string $approveRemarks = null,
        public ?string $importBusinessName = null,
        public ?string $importEmailAddress = null,
        public ?string $importContactNumber = null,
        public ?string $importAddress = null,
        public ?string $importInvoiceDate = null,
        public ?string $importAttachmentName = null,
        public ?string $importAttachmentContent = null
    )
    {
    }

}
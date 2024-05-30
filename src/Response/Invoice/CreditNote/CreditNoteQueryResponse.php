<?php

namespace Sniper\EfrisLib\Response\Invoice\CreditNote;

class CreditNoteQueryResponse
{
    public function __construct(
        public string $id,
        public string $referenceNo,
        public string $oriInvoiceNo,
        public string $invoiceNo,
        public string $approveStatus,
        public string $applicationTime,
        public string $invoiceApplyCategoryCode,
        public string $grossAmount,
        public string $oriGrossAmount,
        public string $currency,
        public string $taskId,
        public string $buyerTin,
        public string $buyerBusinessName,
        public string $buyerLegalName,
        public string $tin,
        public string $businessName,
        public string $legalName,
        public string $waitingDate,
        public string $dataSource
    )
    {
    }
}
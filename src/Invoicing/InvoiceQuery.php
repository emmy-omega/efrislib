<?php

namespace Sniper\EfrisLib\Invoicing;

use JsonSerializable;
use Sniper\EfrisLib\BaseModel;

class InvoiceQuery extends BaseModel implements JsonSerializable
{
    public function __construct(
        public ?string $oriInvoiceNo = null,
        public ?string $invoiceNo = null,
        public ?string $deviceNo = null,
        public ?string $buyerTin = null,
        public ?string $buyerNinBrn = null,
        public ?string $buyerLegalName = null,
        public ?string $combineKeywords = null,
        public ?string $invoiceType = null,
        public ?string $invoiceKind = null,
        public ?string $isInvalid = null,
        public ?string $isRefund = null,
        public ?string $startDate = null,
        public ?string $endDate = null,
        public int  $pageNo = 1,
        public int  $pageSize = 10,
        public ?string $referenceNo = null,
        public ?string $branchName = null,
        public ?string $queryType = null,
        public ?string $dataSource = null,
        public ?string $sellerLegalOrBusinessName = null)
    {
    }

    public function jsonSerialize(): array
    {
        return [$this->oriInvoiceNo, $this->invoiceNo, $this->deviceNo, $this->buyerTin, $this->buyerNinBrn, $this->buyerLegalName, $this->combineKeywords, $this->invoiceType, $this->invoiceKind, $this->isInvalid, $this->isRefund, $this->startDate, $this->endDate, $this->pageNo, $this->pageSize, $this->referenceNo, $this->branchName, $this->queryType, $this->dataSource, $this->sellerLegalOrBusinessName];
    }
}
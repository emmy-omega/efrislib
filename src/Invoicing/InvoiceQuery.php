<?php

namespace Sniper\EfrisLib\Invoicing;

use JsonSerializable;

class InvoiceQuery implements JsonSerializable
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
        public string  $pageNo = "1",
        public string  $pageSize = "10",
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

    public static function fromJson(array $jsonData): self
    {
        return new self($jsonData['oriInvoiceNo'], $jsonData['invoiceNo'], $jsonData['deviceNo'], $jsonData['buyerTin'], $jsonData['buyerNinBrn'], $jsonData['buyerLegalName'], $jsonData['combineKeywords'], $jsonData['invoiceType'], $jsonData['invoiceKind'], $jsonData['isInvalid'], $jsonData['isRefund'], $jsonData['startDate'],
            $jsonData['endDate'], $jsonData['pageNo'], $jsonData['pageSize'], $jsonData['referenceNo'], $jsonData['branchName'],
            $jsonData['queryType'], $jsonData['dataSource'], $jsonData['sellerLegalOrBusinessName']);
    }
}
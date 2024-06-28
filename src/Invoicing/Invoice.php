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

    public static function fromArray(array $data): Invoice
    {
        return new self(
            SellerDetails::fromArray((array) json_decode($data['sellerDetails'])),
            BasicInformation::fromArray((array) json_decode($data['basicInformation'])),
            BuyerDetails::fromArray((array) json_decode($data['buyerDetails'])),
            Summary::fromArray((array) json_decode($data['summary'])),
            Extend::fromArray((array) json_decode($data['extend'])),
            $data['airLineGoodsDetails'] ?? [],
            $data['edcDetails'] ?? [],
            isset($data['importServiceSeller']) ? ImportServiceSeller::fromArray((array) json_decode($data['importServiceSeller'])) : null,
            isset($data['buyerExtend']) ? BuyerExtend::fromArray((array) json_decode($data['buyerExtend'])) : null,
            $data['goodsDetails'] ?? [],
            $data['taxDetails'] ?? [],
            $data['payWay'] ?? []
        );
    }
}
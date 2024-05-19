<?php

namespace Sniper\EfrisLib;

use JsonSerializable;

class Page implements JsonSerializable
{
    public function __construct(
    public int $pageNo,
    public int $pageSize,
    public int $totalSize,
    public int $pageCount) {}

    public function jsonSerialize(): array
    {
        return [
            'pageNo' => $this->pageNo, 'pageSize' => $this->pageSize, 'totalSize' => $this->totalSize,
            'pageCount' => $this->pageCount];
    }

    public static function fromJson(array $jsonData): self
    {
        return new self($jsonData['tin'], $jsonData['pageSize'], $jsonData['totalSize'], $jsonData['pageCount']);
    }


}
<?php

namespace Sniper\EfrisLib\Payload;

use JsonSerializable;

class ExtendField implements JsonSerializable
{

    public function __construct(public string $responseDateFormat = "dd/MM/yyyy", public string $responseTimeFormat = "dd/MM/yyyy HH:mm:ss") {}
    public function jsonSerialize(): array
    {
        return ['responseDateFormat' => $this->responseDateFormat, 'responseTimeFormat' => $this->responseTimeFormat];
    }

    public static function fromJson(array $jsonData): self
    {
        return new self($jsonData['responseDateFormat'], $jsonData['responseTimeFormat']);
    }
}
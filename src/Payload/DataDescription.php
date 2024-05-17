<?php

namespace Sniper\EfrisLib\Payload;

use JsonSerializable;

class DataDescription implements JsonSerializable
{

    public function __construct(public string $codeType = "0", public string $encryptCode = "1", public string $zipCode = "0") {}

    /**
     * @return mixed
     */
    public function jsonSerialize(): array
    {
        return ['codeType' => $this->codeType, 'encryptCode' => $this->encryptCode, 'zipCode' => $this->zipCode];
    }

    public static function fromJson(array $json): self
    {
        return new self($json['codeType'], $json['encryptCode'], $json['zipCode']);
    }
}
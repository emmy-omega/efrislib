<?php

namespace Sniper\EfrisLib\Payload;

use JsonSerializable;

class DataDescription implements JsonSerializable
{

    public function __construct(public string $codeType = "0", public string $encryptCode = "1", public string $zipCode = "0") {}

    public static function builder(): DataDescription
    {
        return new self();
    }

    public function codeType(string $codeType): DataDescription
    {
        $this->codeType = $codeType;
        return $this;
    }
    public function encryptCode(string $encryptCode): DataDescription
    {
        $this->encryptCode = $encryptCode;
        return $this;
    }
    public function zipCode(string $zipCode): DataDescription
    {
        $this->zipCode = $zipCode;
        return $this;
    }

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
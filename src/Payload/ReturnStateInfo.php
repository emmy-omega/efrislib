<?php

namespace Sniper\EfrisLib\Payload;

class ReturnStateInfo implements \JsonSerializable
{
    public function __construct(public string $returnCode, public string $returnMessage)
    {
    }

    /**
     * @return mixed
     */
    public function jsonSerialize(): array
    {
        return ['returnCode' => $this->returnCode, 'returnMessage' => $this->returnMessage];
    }

    public static function fromJson(array $json): self
    {
        return new self($json['returnCode'], $json['returnMessage']);
    }
}
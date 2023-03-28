<?php

namespace Sniper\EfrisLib\Payload;


use Sniper\EfrisLib\Crypto;

class Data
{
    public string $signature;
    public function __construct(public string $content="", public DataDescription $dataDescription = new DataDescription())
    {
//        If code type is 1 (ciphered)
        if ($this->dataDescription->codeType == "1")
        {
            $signed = Crypto::rsaSign($this->content);
            if ($signed)
                $this->signature=$signed;
        }
    }

    public function sign(): bool|string
    {
        $signed = Crypto::rsaSign($this->content);
        if ($signed)
            $this->signature=$signed;
        return $signed;
    }

}
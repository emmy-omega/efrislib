<?php

namespace Sniper\EfrisLib\Payload;


use JsonSerializable;
use PHPUnit\Framework\Constraint\IsInstanceOf;
use Sniper\EfrisLib\Builder;
use Sniper\EfrisLib\Crypto;
use function PHPUnit\Framework\isInstanceOf;

class Data implements JsonSerializable
{
    public function __construct(public string $content = "", public string $signature = "", public DataDescription $dataDescription=new DataDescription())
    {
    }

    /**
     * @param string $content
     * @return $this
     */
    public function content(string $content=""): Data
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $signature
     * @return $this
     */
    public function signature(string $signature=""): Data
    {
        $this->signature = $signature;
        return $this;
    }
    public function dataDescription(DataDescription $dataDescription=new DataDescription()): Data
    {
        $this->dataDescription = $dataDescription;
        return $this;
    }


    public function sign(): Data
    {
        $signed = Crypto::rsaSign($this->content);
        if ($signed)
            $this->signature=base64_encode($signed);
        return $this;
    }

    /**
     * @param string $aesKey
     * @return $this
     */
    public function encrypt(string $aesKey): Data
    {
        $this->content = Crypto::aesEncrypt($this->content, $aesKey);
        $this->dataDescription->codeType("1")->encryptCode("2");
        return $this;
    }

    public function decrypt(string $aesKey): Data
    {
        $this->content = Crypto::aesDecrypt($this->content, $aesKey);
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['content' => $this->content, 'signature' => $this->signature, 'dataDescription' => $this->dataDescription->jsonSerialize()];
    }

    public static function fromJson(array $json): self
    {
        return new self($json['content'], $json['signature'], DataDescription::fromJson($json['dataDescription']));
    }
}
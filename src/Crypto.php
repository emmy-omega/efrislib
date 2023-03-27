<?php

use Illuminate\Support\Arr;

class Crypto
{
    private const cipherAlgorithm = "aes-128-ecb";
    private static string $privateKeyPath;
    private static string $privateKeyPassword;

    /**
     * @return string
     */
    public static function getPrivateKeyPath(): string
    {
        return self::$privateKeyPath;
    }

    /**
     * @param string $privateKeyPath
     */
    public static function setPrivateKeyPath(string $privateKeyPath): void
    {
        self::$privateKeyPath = $privateKeyPath;
    }

    /**
     * @return string
     */
    public static function getPrivateKeyPassword(): string
    {
        return self::$privateKeyPassword;
    }

    /**
     * @param string $privateKeyPassword
     */
    public static function setPrivateKeyPassword(string $privateKeyPassword): void
    {
        self::$privateKeyPassword = $privateKeyPassword;
    }
    private function getPrivateKey(): mixed
    {
        $cert_store = file_get_contents($this::$privateKeyPath);
        $isRead = openssl_pkcs12_read($cert_store, $cert_info, $this::$privateKeyPassword);
        return Arr::get($cert_info, "pkey");
    }
    static function rsaDecrypt($encryptedData): string
    {
        openssl_private_decrypt($encryptedData, $decryptedData, Crypto::getPrivateKey(), OPENSSL_PKCS1_PADDING);
        return $decryptedData;
    }

    static function aesEncrypt(string $data, string $aesKey): bool|string
    {
        return openssl_encrypt($data, Crypto::cipherAlgorithm, $aesKey);
    }

    static function aesDecrypt(string $encryptedData, string $aesKey): bool|string
    {
        return openssl_decrypt($encryptedData, Crypto::cipherAlgorithm, $aesKey);
    }

}
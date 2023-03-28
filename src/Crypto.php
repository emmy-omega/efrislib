<?php
namespace Sniper\EfrisLib;
class Crypto
{
    private const cipherAlgorithm = "aes-128-ecb";
    public static string $privateKeyPath;
    public static string $privateKeyPassword;


    private static function getPrivateKey(): mixed
    {
        $cert_store = file_get_contents(Crypto::$privateKeyPath);
        $isRead = openssl_pkcs12_read($cert_store, $cert_info, Crypto::$privateKeyPassword);
        return $cert_info['pkey'];
    }
    public static function rsaDecrypt($encryptedData): string
    {
        $privateKey = self::getPrivateKey();
        openssl_private_decrypt($encryptedData, $decryptedData, $privateKey, OPENSSL_PKCS1_PADDING);
        return $decryptedData;
    }

    public static function aesEncrypt(string $data, string $aesKey): bool|string
    {
        return openssl_encrypt($data, Crypto::cipherAlgorithm, $aesKey);
    }

    public static function aesDecrypt(string $encryptedData, string $aesKey): bool|string
    {
        return openssl_decrypt($encryptedData, Crypto::cipherAlgorithm, $aesKey);
    }

    public static function rsaSign(string $data): bool|string
    {
        $pKey = Crypto::getPrivateKey();
        $isSigned = openssl_sign($data, $signature, $pKey, OPENSSL_ALGO_SHA1);
        if ($isSigned)
            return $signature;
        return false;
    }

}
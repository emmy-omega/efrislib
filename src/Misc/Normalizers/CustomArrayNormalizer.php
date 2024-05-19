<?php

namespace Sniper\EfrisLib\Misc\Normalizers;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CustomArrayNormalizer implements NormalizerInterface, DenormalizerInterface
{
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        // Check if the data is an array that should be normalized by this normalizer
        return is_array($data);
    }

    public function normalize($object, $format = null, array $context = []): ?string
    {
        // Custom logic to normalize the array
        // Example: Convert array to JSON string
        return json_encode($object);
    }

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        // Check if the data should be denormalized by this normalizer
        return $type === 'array';
    }

    public function denormalize($data, $type, $format = null, array $context = []): mixed
    {
        // Custom logic to denormalize the data
        // Example: Convert JSON string back to array
        return json_decode($data, true);
    }

    public function getSupportedTypes(?string $format): array
    {
        // Return an array of supported types
        // Use '*' for supporting all types if necessary
        return [
            'array' => true,
        ];
    }
}

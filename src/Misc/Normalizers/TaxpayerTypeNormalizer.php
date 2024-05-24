<?php
namespace Sniper\EfrisLib\Misc\Normalizers;

use Sniper\EfrisLib\Misc\Enums\TaxpayerType;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaxpayerTypeNormalizer implements NormalizerInterface, DenormalizerInterface
{
    public function normalize($object, string $format = null, array $context = []): ?string
    {
        if (!$object instanceof TaxpayerType) {
            return null;
        }

        return $object->jsonSerialize();
    }

    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof TaxpayerType;
    }

    public function denormalize($data, string $type, string $format = null, array $context = []): TaxpayerType
    {
        if (!is_string($data)) {
            throw new NotNormalizableValueException();
        }

        return match ($data) {
            '201' => TaxpayerType::Individual,
            '202' => TaxpayerType::NonIndividual,
            default => throw new NotNormalizableValueException(),
        };
    }

    public function supportsDenormalization($data, string $type, string $format = null, array $context = []): bool
    {
        return $type === TaxpayerType::class;
    }

    public function getSupportedTypes($format): array
    {
        return [
            TaxpayerType::class => true,
        ];
    }
}
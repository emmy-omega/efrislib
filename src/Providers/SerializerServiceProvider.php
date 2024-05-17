<?php

namespace Sniper\EfrisLib\Providers;

use Illuminate\Support\ServiceProvider;
use Sniper\EfrisLib\Misc\Normalizers\TaxpayerTypeNormalizer;
use Sniper\EfrisLib\Misc\SerializerFactory;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Serializer::class, function ($app) {

        return SerializerFactory::create();
    });
    }
}
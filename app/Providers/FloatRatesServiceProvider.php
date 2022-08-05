<?php

namespace App\Providers;

use App\Services\FloatRates\FloatRatesService;
use Illuminate\Support\ServiceProvider;

class FloatRatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            FloatRatesService::class,
            fn () => new FloatRatesService()
        );
    }
}

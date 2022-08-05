<?php

namespace App\Services\FloatRates\DataTransferObjects;

use Illuminate\Support\Arr;

class CurrencyData
{
    public function __construct(
        public string $title,
        public string $link,
        public string $description,
        public string $pubDate,
        public string $baseCurrency,
        public string $baseName,
        public string $targetCurrency,
        public string $targetName,
        public string $exchangeRate,
        public string $inverseRate,
        public string $inverseDescription
    ){}

    public static function fromArray($data)
    {
        return new self(
            Arr::get($data, 'title'),
            Arr::get($data, 'link'),
            Arr::get($data, 'description'),
            Arr::get($data, 'pubDate'),
            Arr::get($data, 'baseCurrency'),
            Arr::get($data, 'baseName'),
            Arr::get($data, 'targetCurrency'),
            Arr::get($data, 'targetName'),
            Arr::get($data, 'exchangeRate'),
            Arr::get($data, 'inverseRate'),
            Arr::get($data, 'inverseDescription'),
        );
    }
}

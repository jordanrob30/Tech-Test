<?php

namespace App\Services\FloatRates;

use App\Services\FloatRates\DataTransferObjects\CurrencyData;
use App\Services\FloatRates\Requests\GetFloatRatesRequest;
use Illuminate\Support\Facades\Http;

class FloatRatesService
{
    public function rates()
    {
        $xml = GetFloatRatesRequest::build()->send()->body();

        $data = simplexml_load_string($xml);

        $results = [];

        if($data->item) {
            foreach ($data->item as $item) {
                $results[] = CurrencyData::fromArray((array)$item);
            }
        }

        return $results;
    }

    public function rateBySymbol(string $symbol)
    {
        foreach ($this->rates() as $rate) {
            if($rate->targetCurrency == strtoupper($symbol)) {
                return [$rate];
            }
        }
    }
}

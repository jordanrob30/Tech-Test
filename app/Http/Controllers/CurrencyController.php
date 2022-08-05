<?php

namespace App\Http\Controllers;

use App\Services\FloatRates\FloatRatesService;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getAustralianDollars(FloatRatesService $ratesService)
    {
        return $ratesService->rateBySymbol('AUD');
    }
}

<?php

namespace App\Services\FloatRates\Requests;

class GetFloatRatesRequest extends FloatRatesRequest
{
    protected string $method    = 'GET';
    protected string $path      = 'daily/gbp.xml';
}

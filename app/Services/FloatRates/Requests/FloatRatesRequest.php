<?php

namespace App\Services\FloatRates\Requests;

use Illuminate\Http\Client\Factory as HttpFactory;
use JustSteveKing\Transporter\Request;

class FloatRatesRequest extends Request
{
    public function __construct(HttpFactory $http)
    {
        parent::__construct($http);

        parent::setBaseUrl(config('services.float_rates.base_url'));
    }
}

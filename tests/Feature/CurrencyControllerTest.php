<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrencyControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_does_aus_rates_return_correctly()
    {
        $response = $this->get('/currency/australian-dollars');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            [
               'title',
               'link',
               'description',
               'pubDate',
               'baseCurrency',
               'baseName',
               'targetCurrency',
               'targetName',
               'exchangeRate',
               'inverseRate',
               'inverseDescription'
            ]
        ]);
    }
}

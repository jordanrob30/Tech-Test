<?php

use App\DesignPatterns\BookFactory;
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('currency')->group(function() {
    Route::get('australian-dollars', [CurrencyController::class, 'getAustralianDollars']);
});

Route::get('/', function () {
    //FACTORY PATTERN DEMONSTRATION
    $book = BookFactory::create('Structures : Or Why Things Don\'t Fall Down', 'J. E. Gordon');

    //BUILDER PATTERN DEMONSTRATION
    $pageNumber = $book->turnPage()
        ->turnPage()
        ->getPage();

    echo '<pre>Page Number: ' . $pageNumber . '</pre><br><hr>';

    //STRATEGY PATTERN DEMONSTRATION
    $dataSets = [
        [10, 12, 25, 16, 164, 56698, 4758, 452, 123, 456, 789],
        [10, 12, 25, 452, 123, 456, 789],
    ];

    echo '<br>';
    $results = [];

    foreach ($dataSets as $dataSet) {
        if(count($dataSet) > 7) {
            $sorter = new \App\DesignPatterns\BubbleSort($dataSet);
        } else {
            $sorter = new \App\DesignPatterns\QuickSort($dataSet);
        }

        $results[] = $sorter->sort();
    }

    echo '<pre>';
    print_r($results);
    echo '</pre>';
});

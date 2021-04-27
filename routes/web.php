<?php

use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {

//    Geocoding API
    $location = 'Berlin';
    $geoAPI = '44163ddba63942ccb24ab41f22b4a9f3';
    $bounds = '-11.60156,36.31513,22.14844,58.99531';

    $response = Http::get("https://api.opencagedata.com/geocode/v1/json?q={$location}&key={$geoAPI}&countrycode=de");

    $results = $response->json('results');

//    Weather Api

    $lat = $results[0]['geometry']['lat'];
    $lng = $results[0]['geometry']['lng'];
    $apiKey = '8c444def6f6d95a5ebf766bdd5b5ad49';

    $response = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lng}&appid={$apiKey}&units=metric");
//    $futureWeather = Http::get("");

    dump($response->json());
    return view('welcome', [
        'currentWeather' => $response->json()
    ]);
});

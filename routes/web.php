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
    $geoAPI = config('services.openCage.key');

    $response = Http::get("https://api.opencagedata.com/geocode/v1/json?q={$location}&key={$geoAPI}&countrycode=de");

    $results = $response->json('results');

//    Weather Api

    $lat = $results[0]['geometry']['lat'];
    $lng = $results[0]['geometry']['lng'];
    $apiKey = config('services.openWeather.key');

    $response = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lng}&appid={$apiKey}&units=metric");
    $futureWeather = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lng}&appid={$apiKey}&units=metric&exclude=current,minutely,hourly");

    dump($futureWeather->json('daily'));
    return view('welcome', [
        'weather' => $response->json(),
        'futureWeather' => $futureWeather->json('daily')
    ]);
});

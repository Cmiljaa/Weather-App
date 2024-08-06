<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('index'));
});

Route::get('/weather', [WeatherController::class, 'index'])
->name('index');

Route::post('/weather', [WeatherController::class, 'show'])
->name('show');
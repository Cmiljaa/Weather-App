<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public static function getForecast($city){
        $response = Http::get(env('WEATHER_API_URL'), [
            'q' => $city,
            'appid' => env('WEATHER_API_KEY'),
            'units' => 'metric'
        ]);

        

        return $response->json();
    }
}
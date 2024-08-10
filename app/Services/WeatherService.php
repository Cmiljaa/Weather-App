<?php 

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherService
{
    public static function getForecast($city){

        $cacheKey = "weather_{$city}";

        if(Cache::has($cacheKey))
        {
            return Cache::get($cacheKey);
        }

        $response = Http::get(env('WEATHER_API_URL'), [
            'q' => $city,
            'appid' => env('WEATHER_API_KEY'),
            'units' => 'metric'
        ]);

        $weatherApp = $response->json();

        Cache::put($cacheKey, $weatherApp, 10*60);

        return $weatherApp;
    }
}
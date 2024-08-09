<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show(Request $request){
        
        $city = $request->input('city');
        $city = WeatherService::getForecast($city);
        return view('show', [
            'city' => $city,
            'photo' => isset($city['weather'][0]['icon']) ? substr($city['weather'][0]['icon'], 0, 2) : '13'
        ]);
    }
}

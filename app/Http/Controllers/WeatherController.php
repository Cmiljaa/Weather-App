<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show(Request $request){
        
        $city = $request->input('city');
        return view('show', ['city' => $city]);
    }
}

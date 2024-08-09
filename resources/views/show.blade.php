@extends('layouts.app')
@section('title', 'Weather')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center" >
            <div class="center-box">
                @include('form')
                @if(!isset($city['message']))
                    <img src="{{ asset('icons/' . $city['weather'][0]['icon'] . '.svg') }}" alt="icon not loaded" style="width: 175px; height: 175px; margin-top: 5px;">
                    <h1 class="display-4">{{round($city['main']['temp'])}}°C</h1>
                    <h2>{{$city['weather'][0]['main']}}</h2>
                    <h3>{{$city['name']}}, {{$city['sys']['country']}}</h3>
                    <div class="flex-container">
                        <div class="flex-item">
                            <img src="{{ asset('icons/wind.svg') }}" alt="Wind icon" style="width: 70px; height: 70px;">
                            <h3>{{ $city['wind']['speed'] }} m/s</h3>
                        </div>
                        <div class="flex-item">
                            <img src="{{ asset('icons/humidity.svg') }}" alt="Humidity icon" style="width: 70px; height: 70px;">
                            <h3>{{ $city['main']['humidity'] }}%</h3>
                        </div>
                    </div>
                @else
                    <div style="margin-top: 40px;">
                        <h1 style="font-size: 43px">Error 404</h1>
                        <h1 style="font-size: 43px">{{Str::ucfirst($city['message'])}}</h1>
                        <img src="{{asset('icons/search_error.svg')}}" alt="icon not loaded" style="width: 200px; height: 250px;">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 
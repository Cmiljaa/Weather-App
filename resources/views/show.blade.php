@extends('layouts.app')
@section('title', 'Weather')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center" >
            <div class="center-box">
                @include('form')
                @if(!isset($city['message']))
                    <img src="{{ asset('icons/' . $city['weather'][0]['icon'] . '.svg') }}" alt="icon not loaded" style="width: 175px; height: 175px; margin: px;">
                    <h1 class="display-4">{{round($city['main']['temp'])}}°C</h1>
                    <h2>{{$city['weather'][0]['main']}}</h2>
                    <h3>{{$city['name']}}, {{$city['sys']['country']}}</h3>
                @else
                    <div style="margin-top: 40px;">
                        <h1 class="display-5">Error 404</h1>
                        <h1 class="display-5">{{Str::ucfirst($city['message'])}}</h1>
                        <img src="{{asset('icons/search_error.svg')}}" alt="icon not loaded" style="width: 200px; height: 250px;">
                    </div>
                @endif

                 
            </div>
        </div>
    </div>
</div>
@endsection
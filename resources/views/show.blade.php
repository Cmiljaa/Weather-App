@extends('layouts.app')
@section('title', 'Weather')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center" >
            <div class="center-box">
                <form action="{{route('show')}}" method="POST" class="weather-search">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="city" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
                    </div>
                </form>
                <img src="{{ asset('icons/' . $city['weather'][0]['icon'] . '.svg') }}" alt="Weather Icon" style="width: 175px; height: 175px; margin: 5px;">
                <h1 class="display-4">{{round($city['main']['temp'])}}°C</h1>
                <h2>{{$city['weather'][0]['main']}}</h2>
                <h3>{{$city['name']}}, {{$city['sys']['country']}}</h3>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
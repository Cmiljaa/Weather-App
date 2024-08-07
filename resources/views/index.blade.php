@extends('layouts.app')
@section('title', 'Weather')
@section('content')
<div class="col-12 d-flex justify-content-center" >
    
    <div class="center-box">
        <form action="{{route('show')}}" method="POST" class="weather-search">
            @csrf
            <div class="input-group">
                <input type="search" name="city" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
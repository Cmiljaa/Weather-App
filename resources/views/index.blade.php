@extends('layouts.app')
@section('title', 'Weather')
@section('content')
<div class="col-12 d-flex justify-content-center" >
    <div class="center-box">
        @include('form')
    </div>
</div>
    
@endsection
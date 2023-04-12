@extends('layouts.app')

@section('content')
    <div class="container mx-auto row justify-content-center gap-3 d-flex flex-wrap">
        @foreach ($heroes as $hero)
        <div class="col-3">
            <h1>{{ $hero['name'] }}</h1>
            <h4>{{ $hero['real_name'] }}</h4>
            <p>{{ $hero['status'] }}</p>
        </div>
        @endforeach    
    </div>    
@endsection
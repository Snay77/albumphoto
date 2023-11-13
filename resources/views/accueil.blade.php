@extends('template')

@section('content')

    @auth
        <h1>Bonjour {{Auth::user()->name}}</h1>
    @endauth

@endsection
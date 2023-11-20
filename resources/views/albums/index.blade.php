@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>

    @forelse ($album->photos as $p)
        <img src="{{$p -> url}}" alt="La photo">
    @empty
        Je ne trouve pas de photos dans cet album
    @endforelse

@endsection
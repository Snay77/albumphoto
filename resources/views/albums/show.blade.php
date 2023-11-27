@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>

    {{-- <form action="{{route('')}}" method="GET">
        <input type="text" name="titre" placeholder="Titre">
        <input type="text" name="tag" placeholder="Étiquette">
        <button type="submit">Filtrer</button>
    </form> --}}

@include("_photos", ["photos" => $album->photos])

@endsection
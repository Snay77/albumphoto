@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>
    <i>Créée par ... le ...</i>

    {{-- <form action="{{route('')}}" method="GET">
        <input type="text" name="titre" placeholder="Titre">
        <input type="text" name="tag" placeholder="Étiquette">
        <button type="submit">Filtrer</button>
    </form> --}}

@include("_photos", ["photos" => $album->photos])

@endsection
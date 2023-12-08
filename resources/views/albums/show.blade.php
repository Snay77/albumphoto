@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>
    <i>Créé par ... le {{$album -> creation}}</i>

    <form action="/albums/filter/{{$album->id}}" method="GET">
        <div>
            <label for="tag">Tag:</label>
            <input type="text" id="tag" name="tag" placeholder="Tag ...">
        </div>
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" placeholder="Titre de la photo ...">
        </div>
        <div>
            <button type="submit">Filtrer</button>
        </div>
    </form>

@include("_photos", ["photos" => isset($photofiltre) ? $photofiltre : $album->photos])

@endsection
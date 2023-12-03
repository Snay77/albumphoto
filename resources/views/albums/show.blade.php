@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>

    <form action="{{ route('filter.photos') }}" method="GET">
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

@include("_photos", ["photos" => $album->photos])

@endsection
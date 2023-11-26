@extends('template')

@section('content')
    
    <form action="album.create" method="POST">
        @csrf
        <label for="titre">Titre de l'album :</label>
        <input type="text" name="titre" id="titre">
        <label for="photo">Séléctionnez des photos</label>
        <input type="file" name="photo[]" multiple id="photo">
    </form>

@endsection
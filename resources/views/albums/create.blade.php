@extends('template')

@section('content')
    
    <form action="/albums" method="POST">
        @csrf
        <label for="titre">Titre de l'album :</label>
        <input type="text" name="titre" id="titre">
        <label for="photo">Séléctionnez des photos</label>
        <input type="file" name="photo[]" multiple id="photo">
        <input type="submit"><br/>
    </form>

@endsection
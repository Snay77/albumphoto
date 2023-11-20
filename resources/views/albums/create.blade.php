@extends('template')

@section('content')
    
    <form action="{{route(nvalbum)}}" method="POST">
        @csrf
        <label for="titre">Titre de l'album :</label>
        <input type="text" name="titre" id="titre">
    </form>

@endsection
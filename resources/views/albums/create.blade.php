@extends('template')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/albums" method="POST" enctype="multipart/form-data" class="creerAlb">
        @csrf
        <h1>Ajouter un album</h1>
        <label for="titre">Titre de l'album :</label>
        <input type="text" name="titre" id="titre">
        <div id="photos-container">
            <div class="createalbumphoto">
                <input type="text" name="titrephoto[]" placeholder="Titre de la photo">
                <input type="file" name="photos[]" multiple id="photo">
                <input type="text" name="tag[]" placeholder="Tag de la photo">
                <input type="number" name="note[]" placeholder="Note de la photo (max : 5)">
                <button class="supprimerphoto">Supprimer</button>
            </div>
        </div>
        <button class="ajouterphoto">Ajouter une photo</button>
        <input type="submit"><br/>
    </form>

@endsection
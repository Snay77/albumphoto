@extends('template')

@section('content')
    {{-- Filtrer les photos --}}
    <div class="filtre">
        <form action="{{ route('filter.album', ['id' => $album->id]) }}" method="GET">
            <select name="sort_by">
                <option value="note">Note</option>
                <option value="titre">Titre</option>
            </select>
            <button type="submit">Trier</button>
        </form>
    </div>

    <h1 class="titAlb">Les photos de {{$album -> titre}} :</h1>
    <i class="decale">Créé par ... le {{$album -> creation}}</i> <br/>

    {{-- Fonction pour ajouter une photo --}}
    @auth
        <button id="ajph" class="decale">Ajouter une photo</button>
        <div id="form">
            <div id="int">
                <form action="{{route("ajoutPhoto")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="photos-container">
                        <div class="createalbumphoto">
                            <input type="text" name="titrephoto[]" placeholder="Titre de la photo...">
                            <input type="file" name="photos[]" multiple id="photo">
                            <input type="text" name="tag[]" placeholder="Tag de la photo">
                            <input type="number" name="note[]" placeholder="Note de la photo (max : 5)">
                            <input type="hidden" name="idAlbum" value="{{$album->id}}">
                            <button class="supprimerphoto">Supprimer</button>
                        </div>
                    </div>
                    <button class="ajouterphoto">Ajouter une photo</button>
                    <input type="submit">
                </form>
                <button id="close">Fermer</button>
            </div>
        </div>
    @endauth

    <script>
        let ajph = document.getElementById("ajph");
        let close = document.getElementById("close");
        let form = document.getElementById("form");
        ajph.addEventListener("click", e => form.style.display="block");
        close.addEventListener("click", e => form.style.display="none");
    </script>

    {{-- Filtrer les photos par rapport au tag ou au titre --}}
    <form action="/albums/filter/{{$album->id}}" method="GET" class="decale">
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
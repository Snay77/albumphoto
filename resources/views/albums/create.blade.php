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
    <form action="/albums" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="titre">Titre de l'album :</label>
        <input type="text" name="titre" id="titre">
        <div>
            <input type="text" name="titrephoto[]" placeholder="Titre de la photo...">
            <label for="photo">Séléctionne une photo</label>
            <input type="file" name="photos[]" multiple id="photo">
            <input type="text" name="tag[]" placeholder="Tag de la photo...">
            <input type="number" name="note[]" placeholder="Note de la photo (max : 5)">
        </div>
        <input type="submit"><br/>
    </form>

@endsection
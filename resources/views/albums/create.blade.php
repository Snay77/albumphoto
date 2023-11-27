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
        <label for="photo">Séléctionnez des photos</label>
        <input type="file" name="photos[]" multiple id="photo">
        <input type="submit"><br/>
    </form>

@endsection
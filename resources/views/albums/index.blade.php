@extends('template')

@section('content')

    <div class="filtre">
        <form action="{{ route('filter.albums') }}" method="GET">
            <select name="sort_by">
                <option value="created_at">Date de création</option>
                <option value="titre">Titre</option>
            </select>
            <button type="submit">Trier</button>
        </form>
    </div>

    <h1 class="titAlb">Tous les albums sont ici :</h1>

    <div class="contGridAlb">
        @foreach ($albums as $a)
            <div class="unAlbum">
                <a href="{{route("albums.show", $a -> id)}}">
                    <img src="https://i.pinimg.com/564x/c5/d5/56/c5d5568ffdb855aca2e790ee883da413.jpg" alt="l'image de l'album">
                    <p>{{$a -> creation}}</p>
                    <p class="titreAlb">{{$a -> titre}}</p>
                    <p class="lienAlb">Voir l'album</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
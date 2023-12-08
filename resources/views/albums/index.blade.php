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

    <h1>Tous les albums sont ici :</h1>

    <ul>
        @foreach ($albums as $a)
            <li> <a href="{{route("albums.show", $a -> id)}}">{{$a -> titre}}</a></li>
        @endforeach
    </ul>
@endsection
@extends('template')

@section('content')

<form action="{{ route('filter.albums') }}" method="GET">
    <select name="sort_by">
        <option value="created_at">Date de création</option>
        <option value="title">Titre</option>
    </select>
    <button type="submit">Trier</button>
</form>

    <h1>Tous les albums sont ici :</h1>

    <ul>
        @foreach ($albums as $a)
            <li> <a href="{{route("albums.show", $a -> id)}}">{{$a -> titre}}</a></li>
        @endforeach
    </ul>
@endsection
@extends('template')

@section('content')
    <h1>Tous les albums sont ici :</h1>

    <ul>
        @foreach ($albums as $a)
            <li> <a href="{{route("album", $a -> id)}}">{{$a -> titre}}</a></li>
        @endforeach
    </ul>
@endsection
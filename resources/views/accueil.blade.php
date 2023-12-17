@extends('template')

@section('content')

    <section id="bandeau1">
        <div>
            <h1>Des albums photos pour les plus beaux toutous !</h1>
            <button onclick="window.location.href = '{{route('albums.index')}}';">Voir tous les albums</button>
        </div>
        <img src="{{asset('img/accueil.jpg')}}" alt="dogo">
    </section>

    <section id="bandeau2">
        <b>Admirez et partagez les plus belles photos <br/> de vos petits compagnons.</b>
    </section>

    <section id="bandeau3">
        <h2>Découvrez des albums</h2>
        <div id="selection">
            @for($i = 0; $i < count($albums); $i++)
                <div class="select">
                    <img src="{{$photos[$i]->url}}" alt="Image">
                    <a href="{{route("albums.show", $albums[$i] -> id)}}"><h3>{{$albums[$i]->titre}}</h3></a>
                    <p>Créé le : {{$albums[$i]->creation}}</p>
                </div>
            @endfor
        </div>
        
    </section>

@endsection
@extends('template')

@section('content')

    {{-- @auth
        <h1>Bonjour {{Auth::user()->name}}</h1>
    @endauth --}}

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

            @foreach ($albums as $a)
                <div class="select">
                    <img src="{{$a->photos->url}}" alt="Image">
                    <a href="{{route("albums.show", $a -> id)}}"><h3>{{$a->titre}}</h3></a>
                    <p>Créé le : {{$a->creation}}</p>
                </div>
            @endforeach
        
    </section>

@endsection
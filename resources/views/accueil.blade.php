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
        <h2>La séléction du mois</h2>
        <div id="selection">
            <div class="select1 select">
                <img src="https://i.pinimg.com/564x/19/83/15/198315568576025267103532034eebed.jpg" alt="Image1">
                <a href="#"><h3>Le titre de l'album</h3></a>
                <p>Créée le : </p>
            </div>

            <div class="select2 select">
                <img src="https://i.pinimg.com/564x/5e/c2/8f/5ec28fcf22c7f1142b0b6d723f2da610.jpg" alt="Image1">
                <a href="#"><h3>Le titre de l'album</h3></a>
                <p>Créée le : </p>
            </div>

            <div class="select3 select">
                <img src="https://i.pinimg.com/564x/f0/b5/d0/f0b5d07db8608c0fae8fa149b5c323db.jpg" alt="Image1">
                <a href="#"><h3>Le titre de l'album</h3></a>
                <p>Créée le : </p>
            </div>
        </div>
        
    </section>

@endsection
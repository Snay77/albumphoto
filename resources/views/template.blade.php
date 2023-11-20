<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlbumPhoto</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <img src="{{asset('img/logo.png')}}" alt="Logo ToutouPics">
        <h1>ToutouPics</h1>
        <a href="{{route('albums.index')}}">Tous les albums</a>
        @auth
            <a href="{{route("logout")}}"
            onclick="document.getElementById('logout').submit(); return false;">Logout</a>
            <form id="logout" action="{{route("logout")}}" method="post">
                @csrf
            </form>
            <a href="{{route("albums.create")}}">Créer un album </a>
            {{-- @if ()--}} {{--on est sur la page d'un album--}}
                {{-- <a href="{{route("nvPhoto")}}">Ajouter une photo</a> seulement si on est sur la page d'un album --}}
            {{-- @endif  --}}
        @else
            <a href="{{route("login")}}">Login</a>
            <a href="{{route("register")}}">Register</a>
        @endauth
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Les infos du footer
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlbumPhoto</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">
</head>
<body>
    <header>
        <a href="{{route('albums')}}">Tous les albums</a>
        {{-- @auth  --}}
            {{-- <a href="{{route("logout")}}" --}}
            {{-- onclick="document.getElementById('logout').submit(); return false;">Logout</a> --}}
            {{-- <form id="logout" action="{{route("logout")}}" method="post"> --}}
                {{-- @csrf --}}
            {{-- </form> --}}
            {{-- <a href="{{route("nvalbum")}}">Créer un album </a> --}}
            {{-- @if () {{--on est sur la page d'un album--}}
                {{-- <a href="{{route("nvphoto")}}">Ajouter une photo</a> seulement si on est sur la page d'un album --}}
            {{-- @endif  --}}
        {{-- @else --}}
            <a href="{{route("login")}}">Login</a>
            <a href="{{route("register")}}">Register</a>
        {{-- @endauth --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Les infos du footer
    </footer>
</body>
</html>
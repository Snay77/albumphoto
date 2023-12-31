<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlbumPhoto</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" href="https://use.typekit.net/ktf0wmd.css">
    <link rel="stylesheet" href="https://use.typekit.net/ktf0wmd.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div>
            <a href="{{route('albums.index')}}" class="mod">Tous les albums</a>
            @auth
                <a href="{{route("albums.create")}}" class="mod">Créer un album </a>
                {{-- @if ()--}} {{--on est sur la page d'un album--}}
                {{-- <a href="{{route("nvPhoto")}}">Ajouter une photo</a> seulement si on est sur la page d'un album --}}
                {{-- @endif  --}}
            @else
            rien
            @endauth
        </div>

        <div>
            <img src="{{asset('img/logo.png')}}" alt="Logo ToutouPics">
            <a href="{{route("accueil")}}"><h1 class="logo">ToutouPics</h1></a>
        </div>

        <div>
            @auth
                <a href="{{route("logout")}}" class="mod"
                onclick="document.getElementById('logout').submit(); return false;">Logout</a>
                <form id="logout" action="{{route("logout")}}" method="post">
                    @csrf
                </form>
            @else
                <a href="{{route("login")}}" class="mod">Login</a>
                <a href="{{route("register")}}" class="mod">Register</a>
            @endauth
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h1 class="logo">ToutouPics</h1>

        <div id="logos">
            <a href="https://www.linkedin.com/in/ethan-barlet-473383277"><i class='bx bxl-linkedin'></i></a>
            <a href="https://www.instagram.com/une_okami/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i class='bx bxl-instagram'></i></a>
            <a href="www.linkedin.com/in/lou-anne-biet-3a292622a"><i class='bx bxl-linkedin'></i></a>
        </div>

        Site créé par Ethan Barlet et Lou-Anne Biet MMI
    </footer>
</body>
</html>
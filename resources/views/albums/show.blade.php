@extends('template')

@section('content')
    <h1>Les photos de {{$album -> titre}} :</h1>

    {{-- <form action="{{route('')}}" method="GET">
        <input type="text" name="titre" placeholder="Titre">
        <input type="text" name="tag" placeholder="Étiquette">
        <button type="submit">Filtrer</button>
    </form> --}}

    @forelse ($album->photos as $p)
        <img src="{{$p -> url}}" alt="l'image" id="imgorigine">
        <div id="imgzoom">
            <span onclick="fermerimg()" style="cursor: pointer; position: absolute; top: 20px; right: 20px; color: white; font-size: 40px;">X</span>
            <img src="" alt="image zoom" id="imgzoomsrc">
        </div>

        <script>
            const imgorigine = document.getElementById('imgorigine');
            const imgzoom = document.getElementById('imgzoom');
            const imgzoomsrc = document.getElementById('imgzoomsrc');

            imgorigine.addEventListener('click', function(){
                imgzoomsrc.src = this.src
                imgzoom.style.display = 'block'
            })

            function fermerimg() {
                imgzoom.style.display = 'none'
            }
        </script>
    @empty
        Je ne trouve pas de photos dans cet album
    @endforelse

@endsection
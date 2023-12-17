<div id="phoAlb" class="container">
    @forelse ($photos as $p)
    <div>
        <div class="img">
            <img src="{{$p -> url}}" alt="l_image" id="imgorigine">
            <p class="titPho">{{$p->titre}}</p>
            <p>{{$p->note}}/5</p>

            @auth
                @if (Auth::user()->id == $album->user_id)
                    <form action="{{route('delPhoto', $p->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="sup" type="submit"><i class='bx bxs-x-circle'></i></button>
                        <input type="hidden" name="idAlbum" value="{{$album->id}}">
                    </form>
                @endif
            @endauth

            <i class='bx bx-expand'></i>
        </div>
    </div>

    <div id="imgzoom">
        <span class="closed" style="cursor: pointer; position: absolute; top: 20px; right: 20px; color: white; font-size: 40px;">X</span>
        <img src="" alt="image zoom" id="imgzoomsrc">
    </div>

    @empty
    Je ne trouve pas de photos 
    @endforelse
</div>
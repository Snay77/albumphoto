<div id="phoAlb">
    @forelse ($photos as $p)
    <div id="phoAlb">
        <div class="img">
            <img src="{{$p -> url}}" alt="l_image" id="imgorigine">
            <form action="{{route('delPhoto', $p->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="sup" type="submit"><i class='bx bxs-x-circle'></i></button>
                <input type="hidden" name="idAlbum" value="{{$album->id}}">
            </form>
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
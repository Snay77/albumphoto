@forelse ($photos as $p)
<img src="{{$p -> url}}" alt="l'image" id="imgorigine">
<div id="imgzoom">
    <span class="closed" style="cursor: pointer; position: absolute; top: 20px; right: 20px; color: white; font-size: 40px;">X</span>
    <img src="" alt="image zoom" id="imgzoomsrc">
</div>
@empty
Je ne trouve pas de photos 
@endforelse
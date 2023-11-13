<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    function afficheAlbums(){
        $albums = Album::All();
        return view('albums', compact("albums",));
    }

    function afficheAlbum($id){
        $Album = Album::findOrFail($id);
        return view('album', compact("album",));
    }
}
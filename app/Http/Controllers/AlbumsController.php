<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::All();
        return view('albums.index', compact("albums",));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("nvAlbum");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show', compact("album"));
    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // $film->delete();
    }
}

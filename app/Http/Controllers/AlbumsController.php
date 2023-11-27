<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view("albums.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "titre" => "required|min:5",
            "photos" => 'required',
            "photos.*" => 'required|mimes:jpg,png|max:2048',
        ]);

        $album = new Album();
        $album->titre = $request->input("titre");
        $album->creation = date('Y-m-d');
        $album->user_id = Auth::id();
        $album->save();

        foreach($request->file('photos') as $file){
            $f = $file->hashName();         // Je récupère un hash de son nom
            $file->storeAs("public/upload", $f);   // Je le stocke au bon endroit
            $p = new Photo();
            $p->url="/storage/upload/$f";
            $p->album_id=$album->id;
            $p->save();
        }
        return redirect("/");
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
        // $photo->delete();
    }

    public function filter(Request $request){
        $query = Photo::query();

        if($request->has('titre')){ //filtre par titre
            $query->where('titre', 'like', '%'.$request->input('titre').'%');
        }

        // if($request->has('tag')){
        //     $query->whereHas('tags', function ($q) use ($request){
        //         $q->where('nom',$request->input('tag'));
        //     });
        // }

        $photos = $query->get();

        return view('show.search', compact('photos'));
    }
}

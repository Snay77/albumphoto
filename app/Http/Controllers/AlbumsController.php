<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Tag;
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
            "titre" => "required",
            "titrephoto.*" => "required",
            // "photos" => 'required',
            "photos.*" => 'required|mimes:jpg,png|max:2048',
            "tag.*" => "required",
            "note.*" => "required|max:5",
        ]);

        $album = new Album();
        $album->titre = $request->input("titre");
        $album->creation = date('Y-m-d');
        $album->user_id = Auth::id();
        $album->save();


        for ($i = 0; $i < count($request->input("titrephoto")); $i++) {
            if ($request->file('photos')[$i]->isValid()) {
                $f = $request->file("photos")[$i]->hashName();         // Je récupère un hash de son nom
                $request->file("photos")[$i]->storeAs("public/upload", $f);   // Je le stocke au bon endroit
            }
            $p = new Photo();
            $p->titre = $request->input("titrephoto")[$i];
            $p->note = $request->input('note')[$i];
            $p->url = "/storage/upload/$f";
            $p->album_id = $album->id;
            $p->save();


            $select = Tag::whereRaw('LOWER(nom) = ?', strtolower($request->input('tag')[$i]))->first();
            if ($select) {
                $p->tags()->attach($select->id);
            } else {
                $tag = new Tag();
                $tag->nom = $request->input('tag')[$i];
                $tag->save();
                $p->tags()->attach($tag->id);
            }
            $t = new Tag();
            $t->nom = $request->file('tag');
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

    public function filteralbum(Request $request)
    {
        $sortBy = $request->input('sort_by'); // Récupération du critère de tri depuis le formulaire

        // Par défaut, tri par date de création si aucun critère spécifié
        $sortBy = $sortBy ?? 'created_at';

        // Récupération des albums triés en fonction du critère
        $albums = Album::orderBy($sortBy)->get();

        return view('albums.index', compact('albums'));
    }


    public function filterphoto(Request $request, $id)
    {
        //je récup les paramètre de la recherche
        $tag = $request->input('tag');
        $titre = $request->input('titre');
        $album = Album::findOrFail($id);
        $query = Photo::query();

        if ($tag) {
            $query->whereHas('tags', function ($query) use ($tag) {
                $query->where('nom', $tag);
            })->where("album_id",$id);
        }

        if ($titre) {
            $query->where('titre', 'LIKE', "%$titre%")->where("album_id",$id);
        }

        $photofiltre = $query->get();

        return view('albums.show', compact('photofiltre', 'album'));
    }
}

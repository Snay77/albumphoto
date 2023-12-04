<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            "titrephoto.*" => "required",
            "photos.*" => 'required|mimes:jpg,png|max:2048',
            "tag.*" => "required",
            "note.*" => "required|max:5"
        ]);

        for ($i = 0; $i < count($request->input("titrephoto")); $i++) {
            if ($request->file('photos')[$i]->isValid()) {
                $f = $request->file("photos")[$i]->hashName();
                $request->file("photos")[$i]->storeAs("public/upload", $f);
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
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function afficherRand () {
        $albums = Album::inRandomOrder()->take(3)->get();
        return view('accueil', ['albums' => $albums, 'photos' => $albums->photos]);
    }
}

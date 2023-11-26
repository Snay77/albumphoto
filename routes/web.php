<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('accueil'); })->name(('accueil'));

Route::group(["middleware" => "auth"], function() {
    Route::resource("albums", AlbumsController::class)->only(["create", "store", "destroy"]);
});

Route::resource("albums", AlbumsController::class)->only(['index', "show"]);
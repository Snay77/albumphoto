<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/', [AccueilController::class, 'afficherRand'])->name(('accueil'));
Route::get('/albums/index', [AlbumsController::class, 'filteralbum'])->name('filter.albums');

Route::get('/albums/filter/{id}', [AlbumsController::class, 'filterphoto'])->name('filter.photos');



Route::group(["middleware" => "auth"], function() {
    Route::resource("albums", AlbumsController::class)->only(["create", "store", "destroy"]);
});

Route::resource("albums", AlbumsController::class)->only(['index', "show"]);

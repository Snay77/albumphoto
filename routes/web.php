<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PhotosController;
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
Route::get('/albums/index', [AlbumsController::class, 'filteralbums'])->name('filter.albums');
Route::get('/albums/{id}/filter', [AlbumsController::class, 'filteralbum'])->name('filter.album');

Route::get('/albums/filter/{id}', [AlbumsController::class, 'filterphoto'])->name('filter.photos');



Route::group(["middleware" => "auth"], function() {
    Route::resource("albums", AlbumsController::class)->only(["create", "store", "destroy"]);
});

Route::resource("albums", AlbumsController::class)->only(['index', "show"]);

Route::get('/albums/show', [PhotosController::class, 'store'])->name('ajoutPhoto');
Route::post('/albums/show', [PhotosController::class, 'store'])->name('ajoutPhoto');

Route::resource("/photo", PhotosController::class, ['names'=>["store"=>"ajoutPhoto", "destroy"=>"delPhoto"]])->only(['store', 'destroy']);
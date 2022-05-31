<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\http;
use App\Http\Controllers\FavoriteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/favorites', function () {
    return view('favorites',[FavoriteController::class, 'showAll']);
})->name('favorites');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/movies', function () {
    return view('movies');
});
Route::post('/movies',function (Request $request) {
    $search = $request->input('search');
    $movies = Http::get('https://www.omdbapi.com/?apikey=6aba605c&s='.$search);
    $movies1 = json_decode($movies);
    // dd($movies1);    
    return view('layouts.movies',compact('movies1'));
    
});

Route::post('/favorites', [FavoriteController::class, 'showAll']);
Route::post('/favorite', [FavoriteController::class, 'addFavorite']);
// Route::Get('/movies',function (Request $request) {
//     $search = $request->input('search');
//     dd($search);
// });

// Route::post('/movies', function (Request $request) {
//     $search = $request->input('movie');
//     $movies = Http::get('https://www.omdbapi.com/?apikey=6aba605c&s='.$search);
//     $movies = json_decode($movies);
//     return view('movie', compact('movies'));
// });
// Route::post('/movies'){
//     $search = Request->input ('search')
//     $movie= Http::get('https://www.omdbapi.com/?apikey=6aba605c&s=.$search');
//     $jsMovie = $movie->json();
//     // dd ($jsMovie);
// }


require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;

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

//home
Route::get('/', function () {
    $menu = config('menu');
    return view('guest.home',[
        'menu' => $menu,
    ]);
    // nome rotta
}) ->name('home');



//personaggi
Route::get('/charaters', function () {
    return view('guest.charaters',[
        'menu' => config('menu'),
    ]);
    // nome rotta
}) ->name('charaters');

//pagina collectables
Route::get('/collectables', function () {
    $menu = config('menu');
    return view('guest.collectables', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('collectables');

//pagina comics
Route::get('/menu', function () {
    $comics = config('comics');
    return view('guest.comics', [
        'menu'  => config('menu'),
        'comics' => $comics,
    ]);
    // nome rotta
})->name('comics');


//pagina dei fan
Route::get('/fans', function () {
    $menu = config('menu');
    return view('guest.fans', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('fans');


//pagina dei film
Route::get('/movies', function () {
    $menu = config('menu');
    return view('guest.movies', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('movies');



//pagina delle news
Route::get('/news', function () {
    $menu = config('menu');
    return view('guest.news', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('news');


//pagina dello shop
Route::get('/shop', function () {
    $menu = config('menu');
    return view('guest.shop', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('shop');



// pagina delle tv
Route::get('/tv', function () {
    $menu = config('menu');
    return view('guest.tv', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('tv');


// pagina dei video
Route::get('/videos', function () {
    $menu = config('menu');
    return view('guest.videos', [
        'menu' => $menu,
    ]);
    // nome rotta
})->name('videos');

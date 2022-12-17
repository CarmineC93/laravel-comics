<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comics/{comic}', function ($comicIndex) {
    $comics = config('comics');
    if ($comicIndex >= 0 && $comicIndex < count($comics)) {
        $singleComic = $comics[$comicIndex];
        return view('comics.show', compact('comics', 'singleComic'));
    } else {
        return abort(404);
    }
})->name('comics.show');

// Route::get('/movies', function () {
//     $data = config('comics');
//     return view('movies', compact('data'));
// })->name('movies');

// Route::get('/tv', function () {
//     $data = config('comics');
//     return view('tv', compact('data'));
// })->name('tv');

// Route::get('/games', function () {
//     $data = config('comics');
//     return view('games', compact('data'));
// })->name('games');

// Route::get('/collectibles', function () {
//     $data = config('comics');
//     return view('collectibles', compact('data'));
// })->name('collectibles');

// Route::get('/videos', function () {
//     $data = config('comics');
//     return view('videos', compact('data'));
// })->name('videos');

// Route::get('/fans', function () {
//     $data = config('comics');
//     return view('fans', compact('data'));
// })->name('fans');

// Route::get('/news', function () {
//     $data = config('comics');
//     return view('news', compact('data'));
// })->name('news');

// Route::get('/shop', function () {
//     $data = config('comics');
//     return view('shop', compact('data'));
// })->name('shop');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = config('comics');
    $pages = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"];
    // dd($data);
    return view('home', compact('data', 'pages'));
})->name('home');

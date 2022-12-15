<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = config('comics');
    $pages = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"];
    //dd($data);
    $services = [
        [
            "title" => "digital comics",
            "image" => "resources/img/buy-comics-digital-comics.png"
        ],
        [
            "title" => "dc merchandise",
            "image" => "resources/img/buy-comics-merchandise.png"
        ],
        [
            "title" => "subscription",
            "image" => "resources/img/buy-comics-subscriptions.png"
        ],
        [
            "title" => "comic shop locator",
            "image" => "resources/img/buy-comics-shop-locator.png"
        ],
        [
            "title" => "dc power visa",
            "image" => "resources/img/buy-dc-power-visa.svg"
        ]
    ];
    return view('home', compact('data', 'pages', 'services'));
})->name('home');

Route::get('/characters', function () {
    $data = config('comics');
    return view('characters', compact('data'));
})->name('characters');

Route::get('/comics', function () {

    $data = config('comics');

    return view('comics', compact('data'));
})->name('comics');

Route::get('/movies', function () {
    $data = config('comics');
    return view('movies', compact('data'));
})->name('movies');

Route::get('/tv', function () {
    $data = config('comics');
    return view('tv', compact('data'));
})->name('tv');

Route::get('/games', function () {
    $data = config('comics');
    return view('games', compact('data'));
})->name('games');

Route::get('/collectibles', function () {
    $data = config('comics');
    return view('collectibles', compact('data'));
})->name('collectibles');

Route::get('/videos', function () {
    $data = config('comics');
    return view('videos', compact('data'));
})->name('videos');

Route::get('/fans', function () {
    $data = config('comics');
    return view('fans', compact('data'));
})->name('fans');

Route::get('/news', function () {
    $data = config('comics');
    return view('news', compact('data'));
})->name('news');

Route::get('/shop', function () {
    $data = config('comics');
    return view('shop', compact('data'));
})->name('shop');

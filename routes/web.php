<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = config('comics');
    dd($data);
    return view('home', compact('data'));
})->name('home');

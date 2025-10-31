<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/administration-system', function () {
    return view('administration');
})->name('administration');

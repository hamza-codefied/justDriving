<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/administration-system', function () {
    return view('administration');
})->name('administration');

Route::get('/undervisning-system', function () {
    return view('undervisning');
})->name('undervisning');

Route::get('/booking-system', function () {
    return view('booking');
})->name('booking');

Route::get('/okonomi-system', function () {
    return view('okonomi');
})->name('okonomi');

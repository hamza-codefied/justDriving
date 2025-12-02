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

Route::get('/om-just-driving', function () {
    return view('omJustDriving');
})->name('omJustDriving');

Route::get('/kontakt-os', function () {
    return view('kontakt');
})->name('kontakt');

Route::get('/priser', function () {
    return view('priser');
})->name('priser');

Route::get('/login', function () {
    return view('login');
})->name('login');

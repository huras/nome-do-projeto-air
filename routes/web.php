<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/solucoes', function () {
    return view('pages.solucoes');
})->name('solucoes');

Route::get('/sobre-nos', function () {
    return view('pages.sobre-nos');
})->name('sobre-nos');

Route::get('/nossos-parceiros', function () {
    return view('pages.nossos-parceiros');
})->name('nossos-parceiros');

<?php

use App\Http\Controllers\ContactController;
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

Route::get('/cases-area-externa', function () {
    return view('pages.cases-area-externa');
})->name('cases-externa');

Route::get('/cases-area-interna', function () {
    return view('pages.case.cases-area-interna');
})->name('cases-interna');

Route::get('/sou-creator', function () {
    return view('pages.sou-creator');
})->name('sou-creator');

Route::get('/contato', function () {
    return view('pages.contato');
})->name('contato');

Route::get('/my-air', function () {
    return view('pages.my-air');
})->name('my-air');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

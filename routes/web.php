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

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/about-us', function () {
    $data = [
        'desc' => 'ciao, siamo tanto bravi, fine.'
    ];
    return view('about', $data);
})->name('spec');

Route::get('/devs', function () {
    $data = [
        'nomi' => ['bruno', 'alessio', 'tullio']
    ];
    return view('contact', $data);
})->name('contatti');

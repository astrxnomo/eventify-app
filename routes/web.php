<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/adcommercial', function () {
    return view('adcommercial');
});

Route::get('/commercial', function () {
    return view('commercial');
});

Route::get('/config', function () {
    return view('config');
});

Route::get('/favorites', function () {
    return view('favorites');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/newaccount', function () {
    return view('newaccount');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/yourcommercial', function () {
    return view('yourcommercial');
});


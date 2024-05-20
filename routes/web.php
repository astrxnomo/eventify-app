<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();


Route::view('/', 'home')->name('home');
Route::view('/explore', 'explore')->name('explore');

Route::view('/dashboard', 'dashboard.home')->name('dashboard')->middleware('auth');
Route::view('/dashboard/events', 'dashboard.events')->name('dashboard.events')->middleware('auth');
Route::view('/dashboard/event/edit', 'dashboard.event-edit')->name('dashboard.event-edit')->middleware('auth');
Route::view('/dashboard/tickets', 'dashboard.tickets')->name('dashboard.tickets')->middleware('auth');

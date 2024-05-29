<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;


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


Route::get('/explore',[EventController::class,'index'])->name('explore');
Route::get('/explore/{event}',[EventController::class,'show'])->name('event.detail');



Route::view('/dashboard', 'dashboard.home')->name('dashboard')->middleware('auth');



Route::get('/dashboard/events', [EventController::class, 'myEvents'])->middleware('auth')->name('dashboard.events');
Route::get('/dashboard/events/create',[EventController::class,'create'])->name('dashboard.event-create')->middleware('auth');
Route::post('/dashboard/events/create',[EventController::class,'store'])->name('events.store');
Route::get('/explore/{event}/edit',[EventController::class,'edit'])->name('event.edit')->middleware('auth');
Route::patch('/dashboard/{event}',[EventController::class,'update'])->name('events.update')->middleware('auth');
Route::delete('/dashboard/{event}',[EventController::class,'destroy'])->name('event.destroy')->middleware('auth');


Route::view('/dashboard/event/edit', 'dashboard.event-edit')->name('dashboard.event-edit')->middleware('auth');
Route::view('/dashboard/tickets', 'dashboard.tickets')->name('dashboard.tickets')->middleware('auth');



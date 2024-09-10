<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;


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

Route::get('/', [EventController::class, 'showHome'])->name('home');
Route::get('explore', [EventController::class, 'showExplore'])->name('explore');
Route::get('event/{event}', [EventController::class, 'show'])->name('event.show');

//Reporte del evento
Route::get('/events/{event}/report', [EventController::class, 'downloadEventReport'])->name('events.downloadReport');

Route::prefix('dashboard')->middleware(['auth','role:admin|user'])->group(function () {


    //Usuarios y admins
    Route::view('/', 'dashboard.home')->name('dashboard');

    Route::prefix('events')->group(function () {
        Route::get('/', [EventController::class, 'showMyEvents'])->name('events.index');
        Route::get('create', [EventController::class, 'create'])->name('event.create');
        Route::post('store', [EventController::class, 'store'])->name('event.store');
        Route::get('edit/{event}', [EventController::class, 'edit'])->name('event.edit');
        Route::patch('{event}', [EventController::class, 'update'])->name('event.update');
        Route::delete('/delete/{event}', [EventController::class, 'destroy'])->name('event.destroy');
    });

    Route::prefix('tickets')->group(function () {
        Route::get('/', [TicketController::class, 'showMyTickets'])->name('tickets.index');
        Route::post('store', [TicketController::class, 'store'])->name('ticket.store');
    });


    //Admins
    Route::prefix('admin')->middleware('role:admin')->group(function(){
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });
});


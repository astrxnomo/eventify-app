<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Views\HomeController;
use App\Http\Controllers\Views\ExploreController;
use App\Http\Controllers\Views\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/explore', [ExploreController::class, 'index'])->name('explore');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/events', [DashboardController::class, 'events'])->name('dashboard.events');
Route::get('/dashboard/event/edit', [DashboardController::class, 'eventEdit'])->name('dashboard.event-edit');
Route::get('/dashboard/tickets', [DashboardController::class, 'tickets'])->name('dashboard.tickets');



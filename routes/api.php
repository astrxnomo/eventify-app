<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::apiResource('event', EventApiController::class);
*/

Route::get('event', [EventApiController::class, 'index']);
Route::get('event/{id}', [EventApiController::class, 'show']);
Route::post('event', [EventApiController::class, 'store']);
Route::put('event/{id}', [EventApiController::class, 'update']);
Route::delete('event/{id}', [EventApiController::class, 'destroy']);


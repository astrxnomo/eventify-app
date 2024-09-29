<?php

use App\Http\Controllers\API\CategoryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventApiController;
use App\Http\Controllers\API\LocationApiController;
use App\Http\Controllers\API\StatusApiController;

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

//API evetos
Route::get('event', [EventApiController::class, 'index']);
Route::get('event/{id}', [EventApiController::class, 'show']);
Route::post('event', [EventApiController::class, 'store']);
Route::put('event/{id}', [EventApiController::class, 'update']);
Route::delete('event/{id}', [EventApiController::class, 'destroy']);

//API categorias
Route::get('category', [CategoryApiController::class, 'index']); 
Route::get('category/{id}', [CategoryApiController::class, 'show']); 
Route::post('category', [CategoryApiController::class, 'store']); 
Route::put('category/{id}', [CategoryApiController::class, 'update']); 
Route::delete('category/{id}', [CategoryApiController::class, 'destroy']); 

//otras APIs
Route::apiResource('statuses',StatusApiController::class);
Route::apiResource('locations',LocationApiController::class);
//Route::apiResource('categories',CategoryApiController::class);
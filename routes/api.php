<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPairController;
use App\Http\Controllers\ApiSessionController;

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

//ruta para ping desde ApiPairController
Route::get('/ping', [ApiPairController::class, 'ping']);

//ruta para pair desde ApiPairController
Route::post('/pair', [ApiPairController::class, 'pair']);

//ruta para getUpdates desde ApiSessionController
Route::get('/getUpdates', [ApiSessionController::class, 'getUpdates']);

//ruta para startSession desde ApiSessionController
Route::post('/startSession', [ApiSessionController::class, 'startSession']);

//ruta para stopSession desde ApiSessionController
Route::post('/stopSession', [ApiSessionController::class, 'stopSession']);
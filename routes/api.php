<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::get('/cars',[CarController::class,'index']);
Route::get('/cars/{id}',[CarController::class,'show']);
Route::post('/cars',[CarController::class,'store']);
Route::put('/cars/{id}', [CarController::class, 'update']);
Route::delete('/cars/{id}', [CarController::class, 'destroy']);


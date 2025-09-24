<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WerknemerController;
use App\Http\Controllers\FunctieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('werknemers', WerknemerController::class);
Route::apiResource('functies', FunctieController::class)    
    ->parameters(['functies' => 'functie'])
    ->only(['index', 'show']);
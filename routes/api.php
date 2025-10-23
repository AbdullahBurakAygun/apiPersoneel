<?php                                       // api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WerknemerController;
use App\Http\Controllers\FunctieController;
use App\Http\Controllers\AuthenticationController;

Route::apiResource('werknemers', WerknemerController::class)->only(['index', 'show']);
Route::apiResource('functies', FunctieController::class)
       ->parameters(['functies' => 'functie'])->only(['index', 'show']);
Route::get('functies/{id}/werknemers', [WerknemerController::class, 'indexFunctie']);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {

 //    PROTECTED ROUTES

 Route::apiResource('werknemers', WerknemerController::class)->except(['index', 'show']);
 Route::delete('functies/{id}/werknemers', [WerknemerController::class, 'destroyFunctie']);

    Route::get('profile', function(Request $request) { return auth()->user();});
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found'], 404);
});

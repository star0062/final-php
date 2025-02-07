<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);
Route::post('/superheroes', [SuperheroController::class, 'store']);
Route::put('/superheroes/{id}', [SuperheroController::class, 'update']);
Route::delete('/superheroes/{id}', [SuperheroController::class, 'destroy']);


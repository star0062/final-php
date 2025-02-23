<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/superhero', [SuperheroController::class, 'index']);
// Route::get('/superhero/{id}', [SuperheroController::class, 'show']);
// Route::post('/superhero', [SuperheroController::class, 'store']);
// Route::put('/superhero/{id}', [SuperheroController::class, 'update']);
// Route::delete('/superhero/{id}', [SuperheroController::class, 'destroy']);

Route::prefix('api')->group(function () {
    Route::get('/superheroes', [SuperheroController::class, 'index']);
    Route::post('/superheroes', [SuperheroController::class, 'store']);
    Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);
    Route::put('/superheroes/{id}', [SuperheroController::class, 'update']);
    Route::delete('/superheroes/{id}', [SuperheroController::class, 'destroy']);
});

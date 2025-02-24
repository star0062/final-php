<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('api')->group(function () {
    Route::get('/superheroes', [SuperheroController::class, 'index']);
    Route::post('/superheroes', [SuperheroController::class, 'store']);
    Route::get('/table-sh', [TableSuperheroController::class, 'tableSH']);
    Route::get('/superheroes/{id}/edit', [SuperheroController::class, 'edit']);
    Route::get('/superheroes/create', [SuperheroController::class, 'create']);
    Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);
    Route::put('/superheroes/{id}', [SuperheroController::class, 'update']);
    Route::delete('/superheroes/{id}', [SuperheroController::class, 'destroy']);
});

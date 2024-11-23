<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CotizadorController;
use App\Http\Controllers\FaseController;

// Rutas públicas
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::group(['prefix' => 'cotizador'], function () {
    Route::get('index', [CotizadorController::class, 'index']);
});

// Rutas protegidas
Route::middleware('auth:sanctum')->prefix("admin")->group(function () {

    Route::group(['prefix' => 'fase'], function () {
        Route::post('create', [FaseController::class, 'create']);
    
    });
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/create', [UserController::class, 'store']);
Route::put('/edit/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

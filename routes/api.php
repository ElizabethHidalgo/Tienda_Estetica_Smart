<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\usuarioController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProductoController;

Route::get('/usuarios', [usuarioController::class, 'index']);

Route::get('/usuarios/{id}', [usuarioController::class, 'show']);

Route::post('/usuarios', [usuarioController::class, 'store']);

Route::put('/usuarios/{id}', [usuarioController::class, 'update']);

Route::patch('/usuarios/{id}', [usuarioController::class, 'updatePartial']);

Route::delete('/usuarios/{id}', [usuarioController::class, 'destroy']);


Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/categorias/{id}', [CategoriaController::class, 'show']);

Route::post('/categorias', [CategoriaController::class, 'store']);

Route::put('/categorias/{id}', [CategoriaController::class, 'update']);

Route::patch('/categorias/{id}', [CategoriaController::class, 'updatePartial']);

Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);



Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/productos/{id}', [ProductoController::class, 'show']);

Route::post('/productos', [ProductoController::class, 'store']);

Route::put('/productos/{id}', [ProductoController::class, 'update']);

Route::patch('/productos/{id}', [ProductoController::class, 'updatePartial']);

Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);
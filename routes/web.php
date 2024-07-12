<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('app');
});

Route::get('/ca', function () {
    return view('carrito');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/carrito/agregar', [CarritoController::class, 'agregarAlCarrito'])->name('carrito.agregar');
    Route::post('/carrito/eliminar', [CarritoController::class, 'eliminarDelCarrito'])->name('carrito.eliminar');
    Route::post('/carrito/pagar', [CarritoController::class, 'pagarCarrito'])->name('carrito.pagar');
    Route::get('/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');
});
<?php

use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;

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

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('filament.auth.login');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/factura', function () {
    return view('factura'); // o la lógica que necesites para generar la vista
})->name('factura');

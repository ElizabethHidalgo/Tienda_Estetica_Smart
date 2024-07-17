<?php

use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Livewire\Livewire;

Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('filament.auth.login');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Livewire::setUpdateRoute(function($handle) {
    return Route::post('/Tienda_Estetica_Smart/public/livewire/update', $handle);
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

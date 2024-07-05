<?php

use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('filament.auth.login');

Livewire::setUpdateRoute(function($handle){
    return Route::post('/Tienda_Estetica_Smart/public/livewire/update',$handle);
});
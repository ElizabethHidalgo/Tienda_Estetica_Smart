<?php

use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('filament.auth.login');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
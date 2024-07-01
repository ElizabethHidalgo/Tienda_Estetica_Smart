<?php

use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('filament.auth.login');

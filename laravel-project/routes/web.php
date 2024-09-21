<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcomeMemberShip');
});

Route::get('/register', function () {
    return view('laravelRegister');
});

Route::get('/login', function () {
    return view('laravelLogin');
});

Route::get('/mypage', function () {
    return view('laravelMypage');
})->name('mypage');

Route::get('/logout', function () {
    return view('welcomeMemberShip');
})->name('logout');

Route::get('/password/reset', function () {
    return view('passwordReset');
})->name('password.request');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/password/reset', [PasswordResetController::class, 'sendResetLink'])->name('password.email');

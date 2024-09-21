<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::post('/register', [RegisterController::class, 'register'])->name('register');
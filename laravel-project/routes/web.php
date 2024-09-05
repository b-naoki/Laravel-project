<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcomeMemberShip');
    return view('welcomeMemberShip');
});

// 新しいルートを追加
Route::get('/register', function () {
    return view('laravelRegister'); // laravelRegister.blade.phpを表示
});

// 新しいルートを追加
Route::get('/login', function () {
    return view('laravelLogin'); // laravelRegister.blade.phpを表示
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/layouts/home');
});
Route::get('/home', function () {
    return view('user/layouts/home');
});

Route::get('/admin', function () {
    return view('admin/layouts/dashboard');
});
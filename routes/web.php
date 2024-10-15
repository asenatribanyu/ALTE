<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/pages/home');
});

Route::get('/admin', function () {
    return view('admin/layouts/dashboard');
});
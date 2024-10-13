<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/layouts/home');
});
Route::get('/home', function () {
    return view('user/layouts/home');
})->middleware('verified');

Route::get('/forgot-password', function () {
    return view('auth/forgot-password');
});

// Route::get('/login', function(){
//     return view('auth/login');
// });

// Route::get('/register', function () {
//     return view('auth/register');
// })->name('register');

// Route::get('/email/verify', function () {
//     return view('auth/verify');
// })->name('verification.notice');

Route::get('/reset-password', function () {
    return view('auth/reset-password');
});

// Route::get('/verify', function () {
//     return view('auth/verify');
// });

Route::get('/admin', function () {
    return view('admin/layouts/dashboard');
});
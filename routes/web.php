<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/layouts/home');
});
Route::get('/home', function () {
    return view('user/layouts/home');
});

Route::get('/admin', function () {
    return view('admin/pages/main');
});

Route::get('/admin/manage/files', function () {
    return view('admin/pages/manageFiles');
});

Route::get('/admin/manage/users', function () {
    return view('admin/pages/manageUsers');
});

Route::get('/admin/manage/users/add', function () {
    return view('admin/pages/addUsers');
});

Route::get('/admin/manage/forms', function () {
    return view('admin/pages/manageForms');
});
<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
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

Route::get('/admin/manage/users',[DashboardController::class,'manageUsers']);
Route::delete('/admin/manage/users/delete/{user}',[DashboardController::class,'deleteUser']);
Route::post('/admin/manage/users/store',[DashboardController::class,'createUser']);

Route::get('/admin/manage/users/add', function () {
    return view('admin/pages/addUsers');
});

Route::get('/admin/manage/forms', [FormulirController::class,'index']);
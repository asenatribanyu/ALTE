<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
use App\Models\Formulir;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $Formulir = Formulir::all();
    return view('user/pages/home',['formulirs'=> $Formulir]);
});

Route::get('/form', function () {
    $Formulir = Formulir::all();
    return view('user/pages/formulir',['formulirs'=> $Formulir]);
});

Route::get('/profil', function () {
    return view('user/pages/profil');
});

Route::get('/kontak', function () {
    return view('user/pages/kontak');
});

Route::get('/artikel', function () {
    $Formulir = Formulir::all();
    return view('user/pages/artikel',['formulirs'=> $Formulir]);
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

Route::get('/admin/manage/users/edit', function () {
    return view('admin/pages/editUsers');
});

// Route::resource('/admin/manage/forms', FormulirController::class);
Route::get('/admin/manage/forms', [FormulirController::class,'index']);

Route::put('/admin/manage/forms/{formulir}', [FormulirController::class,'update']);
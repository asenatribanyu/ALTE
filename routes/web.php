<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\UserController;
use App\Models\Document;
use App\Models\Formulir;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $Formulir = Formulir::all();
    return view('user/pages/home',['formulirs'=> $Formulir]);
});

Route::get('/formulir', function () {
    $Formulir = Formulir::all();
    return view('user/pages/formulir',['formulirs'=> $Formulir]);
});

Route::resource('/document', DocumentController::class);

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

Route::resource('/admin/manage/user',UserController::class);

Route::get('/admin/manage/forms', [FormulirController::class,'index']);

Route::put('/admin/manage/forms/{formulir}', [FormulirController::class,'update']);
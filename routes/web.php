<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Artikel;
use App\Models\Document;
use App\Models\Formulir;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $Formulir = Formulir::all();
    $artikel = Artikel::all();
    return view('user/pages/home',[
        'formulirs'=> $Formulir,
        'artikels' => $artikel,
    ]);
});

Route::get('/formulir', function () {
    $Formulir = Formulir::all();
    return view('user/pages/formulir',['formulirs'=> $Formulir]);
});

Route::resource('/document', DocumentController::class);

Route::get('/struktur-organisasi', function () {
    $Formulir = Formulir::all();
    $artikel = Artikel::all();
    $randomArtikels = Artikel::inrandomorder()->take(3)->get();
    return view('user/pages/profilOrganisasi',[
        'formulirs'=> $Formulir,
        'artikels' => $artikel,
        'randomArtikels' => $randomArtikels
    ]);
});

Route::get('/kontak', function () {
    return view('user/pages/kontak');
});

Route::get('/artikel/{id}', function ($id) {
    $Formulir = Formulir::all();
    $artikel = Artikel::all();
    $artikelPilih = Artikel::find($id);
    $randomArtikels = Artikel::where('id','<>',$id)->inrandomorder()->take(3)->get();
    return view('user/pages/artikel',[
        'formulirs'=> $Formulir,
        'artikels' => $artikel,
        'artikelPilih'=> $artikelPilih,
        'randomArtikels' => $randomArtikels
    ]);
});

Route::middleware(['auth','verified',AdminMiddleware::class])->group(function(){

    Route::get('/admin', function () {
        return view('admin/pages/main');
    });
    
    Route::get('/admin/manage/files', function () {
        $document = Document::all();
        return view('admin/pages/manageFiles',['documents'=> $document]);
    });
    
    Route::resource('/admin/manage/user',UserController::class);
    
    Route::get('/admin/manage/forms', [FormulirController::class,'index']);
    
    Route::put('/admin/manage/forms/{formulir}', [FormulirController::class,'update']);
});
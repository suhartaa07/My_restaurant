<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

//Route::get('/admin/kategori', function () {
//    return view('admin.kategori');
//});
Route::get('/admin/inputkategori', [CategoryController::class, 'index'])->name('admin.inputkategori');

Route::get('/admin/penulis', function () {
    return view('admin.penulis');
});


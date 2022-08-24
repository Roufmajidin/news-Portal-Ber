<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('master.layouts');
});

// Route::get('/kategori-berita', function () {
//     return view('pages.tabelKategori');
// });
Route::get('/kategori-berita', [KategoriController::class, 'index']);
Route::get('/delete-kategori/{id}', [KategoriController::class, 'destroy']);
Route::get('/detail-kategori/{id}', [KategoriController::class, 'show']);
Route::post('/add-kategori', [KategoriController::class, 'store']);
Route::get('/tambah-berita', [BeritaController::class, 'create']);

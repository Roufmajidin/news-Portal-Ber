<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MasterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
Use App\Providers\RouteServiceProvider\UniSharp;
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

Route::get('/single', function () {
    return view('pages.detailBerita');
});


// Route::get('/kategori-berita', function () {
//     return view('pages.tabelKategori');
// });
Route::group(['middleware' => 'admin'], function () {
Route::get('/kategori-berita', [KategoriController::class, 'index']);
Route::get('/delete-kategori/{id}', [KategoriController::class, 'destroy']);
Route::get('/delete-detail/{id}', [KategoriController::class, 'destroyd']);
Route::get('/detail-kategori/{id}', [KategoriController::class, 'show']);
Route::post('/add-kategori', [KategoriController::class, 'store']);
Route::get('/tambah-berita', [BeritaController::class, 'create']);
Route::post('/proses-tambah-berita', [BeritaController::class, 'store']);
Route::get('/detail/{id}', [BeritaController::class, 'show']);
Route::get('/edit-berita/{id}', [BeritaController::class, 'edit']);
Route::patch('/proses-edit-berita/{id}', [BeritaController::class, 'update']);


});
Route::group(['prefix' => 'laravel-filemanager'], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();

 });
// master portal

Route::get('/berita', [MasterController::class, 'index']);
Route::get('/{slug}/{id}', [MasterController::class, 'show']);
Route::get('/lihat/{id}', [BeritaController::class, 'tag']);

Auth::routes();

Route::get('/haha', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/user-tambah', function () {

    $pertemuan = User::create([
        'name' => 'Rouf Trebber',
        'email' => 'rouf@mail.com',
        'level' => 'admin',

        'password' => md5('roufrouf'),


    ]);
});

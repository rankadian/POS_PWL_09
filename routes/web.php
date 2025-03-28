<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WellcomeController;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// DB face cade implementation
// Route::get('/level', [LevelController::class, 'index']);

// Query Builder
// Route::get('/kategori/insert', [KategoriController::class, 'insert']);
// Route::get('/kategori/update', [KategoriController::class, 'update']);
// Route::get('/kategori/delete', [KategoriController::class, 'delete']);
// Implementations
// Route::get('/kategori', [KategoriController::class, 'index']);



// Jobsheet 4
// ELOQUENT ORM
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);

// Create, Read, Update, Delete (CRUD)
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::get('/user', [UserController::class, 'index'])->name('/user');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');



// Jobsheet 5
// Prakticum 2
Route::get('/', [WellcomeController::class, 'index']);

// Prakticum 3
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // menampilkan halaman form tambah user ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']);        // menyimpan data user baru ajax
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);    // menampilkan halaman form edit user ajax
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);// menyimpan perubahan data user ajax
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   // untuk memampilkan form confirm delete user ajax
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // untuk hapus data user ajax
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

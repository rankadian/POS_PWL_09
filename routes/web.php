<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Route;

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
Route::get('/kategori', [KategoriController::class, 'index']);

// ELOQUENT ORM
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

// Create, Read, Update, Delete (CRUD)
Route::get('/user/tambah', [UserController::class, ''])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, ''])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, ''])->name('/user/hapus');

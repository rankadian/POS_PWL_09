<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WellcomeController;
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

// Route::get('/', [WellcomeController::class, 'index']);

// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', [UserController::class, 'index']);                          // menampilkan halaman awal user
//     Route::post('/list', [UserController::class, 'list']);                      // menampilkan data user dalam bentuk json untuk datatables
//     Route::get('/create', [UserController::class, 'create']);                   // menampilkan halaman form tambah user
//     Route::post('/', [UserController::class, 'store']);                         // menyimpan data user baru
//     Route::get('/create_ajax', [UserController::class, 'create_ajax']);         // menampilkan halaman form tambah user ajax
//     Route::post('/ajax', [UserController::class, 'store_ajax']);                // menyimpan data user baru ajax
//     Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);        // menampilkan data user dengan ajax
//     Route::get('/{id}', [UserController::class, 'show']);                       // menampilkan detail user
//     Route::get('/{id}/edit', [UserController::class, 'edit']);                  // menampilkan halaman form edit user
//     Route::put('/{id}', [UserController::class, 'update']);                     // menyimpan perubahan data user
//     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        // menampilkan halaman form edit user ajax
//     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    // menyimpan perubahan data user ajax
//     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   // untuk memampilkan form confirm delete user ajax
//     Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // untuk hapus data user ajax
//     Route::delete('/{id}', [UserController::class, 'destroy']);                 // menghapus data user
// });

// Route::group(['prefix' => 'level'], function () {
//     Route::get('/', [LevelController::class, 'index']);
//     Route::post('/list', [LevelController::class, 'list']);
//     Route::get('/create', [LevelController::class, 'create']);
//     Route::post('/', [LevelController::class, 'store']);
//     Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
//     Route::post('/ajax', [LevelController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
//     Route::get('/{id}', [LevelController::class, 'show']);
//     Route::get('/{id}/edit', [LevelController::class, 'edit']);
//     Route::put('/{id}', [LevelController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
//     Route::delete('/{id}', [LevelController::class, 'destroy']);
// });

// Route::group(['prefix' => 'kategori'], function () {
//     Route::get('/', [KategoriController::class, 'index']);
//     Route::post('/list', [KategoriController::class, 'list']);
//     Route::get('/create', [KategoriController::class, 'create']);
//     Route::post('/', [KategoriController::class, 'store']);
//     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
//     Route::post('/ajax', [KategoriController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
//     Route::get('/{id}', [KategoriController::class, 'show']);
//     Route::get('/{id}/edit', [KategoriController::class, 'edit']);
//     Route::put('/{id}', [KategoriController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
//     Route::delete('/{id}', [KategoriController::class, 'destroy']);
// });

// Route::group(['prefix' => 'barang'], function () {
//     Route::get('/', [BarangController::class, 'index']);
//     Route::post('/list', [BarangController::class, 'list']);
//     Route::get('/create', [BarangController::class, 'create']);
//     Route::post('/', [BarangController::class, 'store']);
//     Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
//     Route::post('/ajax', [BarangController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
//     Route::get('/{id}', [BarangController::class, 'show']);
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);
//     Route::put('/{id}', [BarangController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
//     Route::delete('/{id}', [BarangController::class, 'destroy']);
// });

// Route::group(['prefix' => 'stok'], function () {
//     Route::get('/', [StokController::class, 'index']);
//     Route::post('/list', [StokController::class, 'list']);
//     Route::get('/create', [StokController::class, 'create']);
//     Route::post('/', [StokController::class, 'store']);
//     Route::get('/create_ajax', [StokController::class, 'create_ajax']);
//     Route::post('/ajax', [StokController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
//     Route::get('/{id}', [StokController::class, 'show']);
//     Route::get('/{id}/edit', [StokController::class, 'edit']);
//     Route::put('/{id}', [StokController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
//     Route::delete('/{id}', [StokController::class, 'destroy']);
// });

// Route::group(['prefix' => 'penjualan'], function () {
//     Route::get('/', [PenjualanController::class, 'index']);
//     Route::post('/list', [PenjualanController::class, 'list']);
//     Route::get('/create', [PenjualanController::class, 'create']);
//     Route::post('/', [PenjualanController::class, 'store']);
//     Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);
//     Route::post('/ajax', [PenjualanController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
//     Route::get('/{id}', [PenjualanController::class, 'show']);
//     Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
//     Route::put('/{id}', [PenjualanController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
//     Route::delete('/{id}', [PenjualanController::class, 'destroy']);
// });

// Route::group(['prefix' => 'detail_penjualan'], function () {
//     Route::get('/', [DetailPenjualanController::class, 'index']);
//     Route::post('/list', [DetailPenjualanController::class, 'list']);
//     Route::get('/create', [DetailPenjualanController::class, 'create']);
//     Route::post('/', [DetailPenjualanController::class, 'store']);
//     Route::get('/create_ajax', [DetailPenjualanController::class, 'create_ajax']);
//     Route::post('/ajax', [DetailPenjualanController::class, 'store_ajax']);
//     Route::get('/{id}/show_ajax', [DetailPenjualanController::class, 'show_ajax']);
//     Route::get('/{id}', [DetailPenjualanController::class, 'show']);
//     Route::get('/{id}/edit', [DetailPenjualanController::class, 'edit']);
//     Route::put('/{id}', [DetailPenjualanController::class, 'update']);
//     Route::get('/{id}/edit_ajax', [DetailPenjualanController::class, 'edit_ajax']);
//     Route::put('/{id}/update_ajax', [DetailPenjualanController::class, 'update_ajax']);
//     Route::get('/{id}/delete_ajax', [DetailPenjualanController::class, 'confirm_ajax']);
//     Route::delete('/{id}/delete_ajax', [DetailPenjualanController::class, 'delete_ajax']);
//     Route::delete('/{id}', [DetailPenjualanController::class, 'destroy']);
// });

Route::pattern('id', '[0-9]+');

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'postLogin')->name('login.post');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    Route::get('register', 'showSignup')->name('signup');
    Route::post('register', 'postSignup')->name('signup.post');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WellcomeController::class, 'index']);
    Route::middleware(['authorize:ADM'])->group(function () {
        //user
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index']);
            Route::post('/list', [UserController::class, 'list']);
            Route::get('/create', [UserController::class, 'create']);
            Route::post('/', [UserController::class, 'store']);
            Route::get('/create_ajax', [UserController::class, 'create_ajax']);
            Route::post('/ajax', [UserController::class, 'store_ajax']);
            Route::get('/{id}', [UserController::class, 'show']);
            Route::get('/{id}/edit', [UserController::class, 'edit']);
            Route::put('/{id}', [UserController::class, 'update']);
            Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
            Route::delete('/{id}', [UserController::class, 'destroy']);
            Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
        });
    });

    // Level
    Route::prefix('level')
        ->middleware(['authorize:ADM'])
        ->controller(LevelController::class)
        ->group(function () {
            Route::get('/', 'index')->name('level.index');
            Route::post('/list', 'list')->name('level.list');
            Route::get('/create', 'create')->name('level.create');
            Route::get('/create-ajax', 'createAjax')->name('level.create-ajax');
            Route::post('/', 'store')->name('level.store');
            Route::post('/store-ajax', 'storeAjax')->name('level.store-ajax');
            Route::get('/{id}', 'show')->name('level.show');
            Route::get('/{id}/edit', 'edit')->name('level.edit');
            Route::get('/{id}/edit-ajax', 'editAjax')->name('level.edit-ajax');
            Route::put('/{id}', 'update')->name('level.update');
            Route::put('/{id}/update-ajax', 'updateAjax')->name('level.update-ajax');
            Route::delete('/{id}', 'destroy')->name('level.destroy');
            Route::get('/{id}/delete-ajax', 'confirmDeleteAjax')->name('level.confirm-delete-ajax');
            Route::delete('/{id}/delete-ajax', 'deleteAjax')->name('level.delete-ajax');
            Route::get('/{id}/show_ajax', 'show_ajax')->name('level.show_ajax');
        });

    // Kategori
    Route::prefix('kategori')
        ->middleware(['authorize:ADM,MNG,STF'])
        ->controller(KategoriController::class)
        ->group(function () {
            Route::get('/', 'index')->name('kategori.index');
            Route::post('/list',  'list')->name('kategori.list');
            Route::get('/create', 'create')->name('kategori.create');
            Route::get('/create-ajax', 'createAjax')->name('kategori.create-ajax');
            Route::post('/', 'store')->name('kategori.store');
            Route::post('/store-ajax', 'storeAjax')->name('kategori.store-ajax');
            Route::get('/{id}', 'show')->name('kategori.show');
            Route::get('/{id}/edit', 'edit')->name('kategori.edit');
            Route::get('/{id}/edit-ajax', 'editAjax')->name('kategori.edit-ajax');
            Route::put('/{id}', 'update')->name('kategori.update');
            Route::put('/{id}/update-ajax', 'updateAjax')->name('kategori.update-ajax');
            Route::delete('/{id}', 'destroy')->name('kategori.destroy');
            Route::get('/{id}/delete-ajax', 'confirmDeleteAjax')->name('kategori.confirm-delete-ajax');
            Route::delete('/{id}/delete-ajax', 'deleteAjax')->name('kategori.delete-ajax');
            Route::get('/{id}/show_ajax', 'show_ajax')->name('kategori.show_ajax');
        });

    // Barang
    Route::prefix('barang')
        ->middleware(['authorize:ADM,MNG,STF'])
        ->controller(BarangController::class)
        ->group(function () {
            Route::get('/', 'index')->name('barang.index');
            Route::post('/list',  'list')->name('barang.list');
            Route::get('/create', 'create')->name('barang.create');
            Route::get('/create-ajax', 'createAjax')->name('barang.create-ajax');
            Route::post('/', 'store')->name('barang.store');
            Route::post('/store-ajax', 'storeAjax')->name('barang.store-ajax');
            Route::get('/{id}', 'show')->name('barang.show');
            Route::get('/{id}/edit', 'edit')->name('barang.edit');
            Route::get('/{id}/edit-ajax', 'editAjax')->name('barang.edit-ajax');
            Route::put('/{id}', 'update')->name('barang.update');
            Route::put('/{id}/update-ajax', 'updateAjax')->name('barang.update-ajax');
            Route::delete('/{id}', 'destroy')->name('barang.destroy');
            Route::get('/{id}/delete-ajax', 'confirmDeleteAjax')->name('barang.confirm-delete-ajax');
            Route::delete('/{id}/delete-ajax', 'deleteAjax')->name('barang.delete-ajax');
            Route::get('/{id}/show_ajax', 'show_ajax')->name('barang.show_ajax');

            // Route::get('/import', 'showImport')->name('barang.import');
            // Route::post('/import', 'importData')->name('barang.importData.post');
        });

    //Stok barang
    Route::middleware(['authorize:ADM,STF,MNG'])->group(function () {
        Route::group(['prefix' => 'stok'], function () {
            Route::get('/', [StokController::class, 'index']);
            Route::post('/list', [StokController::class, 'list']);
            Route::get('/create', [StokController::class, 'create']);
            Route::post('/', [StokController::class, 'store']);
            Route::get('/create_ajax', [StokController::class, 'create_ajax']);
            Route::post('/ajax', [StokController::class, 'store_ajax']);
            Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
            Route::get('/{id}', [StokController::class, 'show']);
            Route::get('/{id}/edit', [StokController::class, 'edit']);
            Route::put('/{id}', [StokController::class, 'update']);
            Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
            Route::delete('/{id}', [StokController::class, 'destroy']);
        });
    });

    //penjualan
    Route::middleware(['authorize:ADM,STF'])->group(function () {
        Route::group(['prefix' => 'penjualan'], function () {
            Route::get('/', [PenjualanController::class, 'index']);
            Route::post('/list', [PenjualanController::class, 'list']);
            Route::get('/create', [PenjualanController::class, 'create']);
            Route::post('/', [PenjualanController::class, 'store']);
            Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);
            Route::post('/ajax', [PenjualanController::class, 'store_ajax']);
            Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
            Route::get('/{id}', [PenjualanController::class, 'show']);
            Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
            Route::put('/{id}', [PenjualanController::class, 'update']);
            Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
            Route::delete('/{id}', [PenjualanController::class, 'destroy']);
        });
    });

    //penjualan detail
    Route::group(['prefix' => 'detail_penjualan'], function () {
        Route::get('/', [DetailPenjualanController::class, 'index']);
        Route::post('/list', [DetailPenjualanController::class, 'list']);
        Route::get('/create', [DetailPenjualanController::class, 'create']);
        Route::post('/', [DetailPenjualanController::class, 'store']);
        Route::get('/create_ajax', [DetailPenjualanController::class, 'create_ajax']);
        Route::post('/ajax', [DetailPenjualanController::class, 'store_ajax']);
        Route::get('/{id}/show_ajax', [DetailPenjualanController::class, 'show_ajax']);
        Route::get('/{id}', [DetailPenjualanController::class, 'show']);
        Route::get('/{id}/edit', [DetailPenjualanController::class, 'edit']);
        Route::put('/{id}', [DetailPenjualanController::class, 'update']);
        Route::get('/{id}/edit_ajax', [DetailPenjualanController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [DetailPenjualanController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [DetailPenjualanController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [DetailPenjualanController::class, 'delete_ajax']);
        Route::delete('/{id}', [PenjualanController::class, 'destroy']);
    });
});

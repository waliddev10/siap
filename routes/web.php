<?php

use App\Http\Controllers\LaporanBulananEsamsatController;
use App\Http\Controllers\LaporanBulananPenerimaanController;
use App\Http\Controllers\LaporanBulananSkpdBatalController;
use App\Http\Controllers\LaporanBulananSkpdController;
use App\Http\Controllers\LaporanHarianController;
use App\Http\Controllers\LaporanHarianSkpdBatalController;
use App\Http\Controllers\Pengaturan\JenisPkbController;
use App\Http\Controllers\Pengaturan\KasirController;
use App\Http\Controllers\Pengaturan\KasirPembayaranController;
use App\Http\Controllers\Pengaturan\KotaPenandatanganController;
use App\Http\Controllers\Pengaturan\PaymentPointController;
use App\Http\Controllers\Pengaturan\PenandatanganController;
// use App\Http\Controllers\Pengaturan\UserController;
use App\Http\Controllers\Pengaturan\WilayahController;
use App\Http\Controllers\UserController;
use App\Models\PaymentPoint;
use Illuminate\Support\Facades\Artisan;
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

// setup

Route::get('/migrate', function () {
    return Artisan::call('migrate');
});
Route::get('/migrate/fresh', function () {
    return Artisan::call('migrate:fresh');
});
Route::get('/seed', function () {
    return Artisan::call('db:seed');
});
Route::get('/symlink', function () {
    $target =  env('SYMLINK_PATH');
    $shortcut = env('SYMLINK_PATH_TARGET');
    return symlink($target, $shortcut);
});

// router

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::resource('/user', UserController::class)->except('show');

    // Route::prefix('/laporan_harian')->group(function () {
    //     Route::get('/', [LaporanHarianController::class, 'index'])
    //         ->name('laporan_harian.index');
    //     Route::get('/payment_point/{payment_point}', [LaporanHarianController::class, 'show'])
    //         ->name('laporan_harian.show');
    //     Route::get('/payment_point/{payment_point}/{jenis_pkb}/create', [LaporanHarianController::class, 'create'])
    //         ->name('laporan_harian.create');
    //     Route::post('/payment_point/{payment_point}', [LaporanHarianController::class, 'store'])
    //         ->name('laporan_harian.store');
    //     Route::get('/payment_point/{payment_point}/{esamsat}', [LaporanHarianController::class, 'edit'])
    //         ->name('laporan_harian.edit');
    //     Route::put('/payment_point/{payment_point}/{esamsat}', [LaporanHarianController::class, 'update'])
    //         ->name('laporan_harian.update');
    //     Route::delete('/payment_point/{payment_point}/{esamsat}', [LaporanHarianController::class, 'destroy'])
    //         ->name('laporan_harian.destroy');
    // });

    // Route::prefix('/laporan_harian_skpd_batal')->group(function () {
    //     Route::get('/', [LaporanHarianSkpdBatalController::class, 'index'])
    //         ->name('laporan_harian_skpd_batal.index');
    //     Route::get('/payment_point/{payment_point}', [LaporanHarianSkpdBatalController::class, 'show'])
    //         ->name('laporan_harian_skpd_batal.show');
    //     Route::get('/payment_point/{payment_point}/{esamsat}', [LaporanHarianSkpdBatalController::class, 'edit'])
    //         ->name('laporan_harian_skpd_batal.edit');
    //     Route::put('/payment_point/{payment_point}/{esamsat}', [LaporanHarianSkpdBatalController::class, 'update'])
    //         ->name('laporan_harian_skpd_batal.update');
    // });

    // Route::prefix('/laporan_bulanan_esamsat')->group(function () {
    //     Route::get('/', [LaporanBulananEsamsatController::class, 'index'])
    //         ->name('laporan_bulanan_esamsat.index');
    //     Route::post('/print', [LaporanBulananEsamsatController::class, 'print'])
    //         ->name('laporan_bulanan_esamsat.print');
    // });


    // Route::prefix('/laporan_bulanan_penerimaan')->group(function () {
    //     Route::get('/', [LaporanBulananPenerimaanController::class, 'index'])
    //         ->name('laporan_bulanan_penerimaan.index');
    //     Route::post('/print', [LaporanBulananPenerimaanController::class, 'print'])
    //         ->name('laporan_bulanan_penerimaan.print');
    // });

    // Route::prefix('/laporan_bulanan_skpd')->group(function () {
    //     Route::get('/', [LaporanBulananSkpdController::class, 'index'])
    //         ->name('laporan_bulanan_skpd.index');
    //     Route::post('/print', [LaporanBulananSkpdController::class, 'print'])
    //         ->name('laporan_bulanan_skpd.print');
    // });

    // Route::prefix('/laporan_bulanan_skpd_batal')->group(function () {
    //     Route::get('/', [LaporanBulananSkpdBatalController::class, 'index'])
    //         ->name('laporan_bulanan_skpd_batal.index');
    //     Route::post('/print', [LaporanBulananSkpdBatalController::class, 'print'])
    //         ->name('laporan_bulanan_skpd_batal.print');
    // });

    Route::prefix('/pengaturan')->middleware('role:admin')->group(function () {
        Route::resource('/jenis_pkb', JenisPkbController::class)->except('show');
        Route::resource('/wilayah', WilayahController::class)->except('show');
        Route::resource('/kasir', KasirController::class)->except('show');
        Route::resource('/kasir_pembayaran', KasirPembayaranController::class)->except('show');
        Route::resource('/payment_point', PaymentPointController::class)->except('show');
        Route::resource('/penandatangan', PenandatanganController::class)->except('show');
        Route::resource('/kota_penandatangan', KotaPenandatanganController::class)->except('show');
        // Route::resource('/user', UserController::class)->except('show');
    });
});

require __DIR__ . '/auth.php';

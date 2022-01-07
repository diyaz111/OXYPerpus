<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->get('/buku', function() {
    return view ('buku/index');
})->name('buku');

Route::resource('/buku', BukuController::class)->middleware('role:admin');
Route::resource('/roles', RoleController::class)->middleware('role:admin');
Route::resource('transaksi', TransaksiController::class)->middleware('role:anggota');

Route::get('/laporan/trs', [LaporanController::class, 'transaksi']);
Route::get('/laporan/trs/pdf', [LaporanController::class, 'transaksiPdf']);
Route::get('/laporan/trs/excel', [LaporanController::class, 'transaksiExcel']);

Route::get('/laporan/buku', [LaporanController::class, 'buku']);
Route::get('/laporan/buku/pdf', [LaporanController::class, 'bukuPdf']);
Route::get('/laporan/buku/excel', [LaporanController::class, 'bukuExcel']);

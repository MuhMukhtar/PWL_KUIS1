<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/today-special', [App\Http\Controllers\HomeController::class, 'todaySpecial']);
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index']);
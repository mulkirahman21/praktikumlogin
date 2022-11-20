<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\SupplierController;
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
// Route::get('/supplier', function () {
//     return view('supplier.index');
// });

Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/tambah', [SupplierController::class, 'formTambah']);
Route::post('/supplier/simpan', [SupplierController::class, 'simpan']);
Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
Route::post('/supplier/edit/editsimpan', [SupplierController::class, 'editsimpan']);
Route::get('/supplier/hapus/{id}', [SupplierController::class, 'hapus']);

// Route::post('/supplier/process', [Supplier::class, 'process']);
// Route::get('/supplier/detil/{id}', [Supplier::class, 'detil/{$id}']);
//Get, Post, Put, dll 
//Lokasi Routing
Route::get('/gudang', [LokasiController::class, 'index']);
Route::get('/gudang/tambah', [LokasiController::class, 'formTambah']);
Route::post('/gudang/simpan', [LokasiController::class, 'simpan']);
Route::get('/gudang/edit/{id}', [LokasiController::class, 'edit']);
Route::post('/gudang/edit/editsimpan', [LokasiController::class, 'editsimpan']);
Route::get('/gudang/hapus/{id}', [LokasiController::class, 'hapus']);
//Route login
Route::controller(OtentikasiController::class)->group(function () {
    Route::get('login', 'formlogin')->name('login');
    Route::post('auth', 'authenticate');
    Route::get('logout', 'logout');
});

// Route::post('auth', [logincontroller::class, 'authenticate']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasiKamarController;
use App\Http\Controllers\FasiHotelController;






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

// guest
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/test', [HomeController::class, 'test']);



// auth
Route::get('/login', [LoginAuthController::class, 'login'])->name('auth.login');
Route::post('/login', [LoginAuthController::class, 'postlogin'])->name('auth.postlogin');
Route::post('/logout', [LoginAuthController::class, 'logout'])->name('auth.logout');

//tamu
    //
    Route::get('/pemesanan', [TamuController::class, 'index'])->name('pemesanan.index');
    Route::get('/pemesanan/create', [TamuController::class, 'create'])->name('pemesanan.create');
    Route::post('/pemesanan/create/postdata', [TamuController::class, 'store'])->name('pemesanan.create.postdata');
    Route::get('/pemesanan/reservasi', [TamuController::class, 'show'])->name('pemesanan.reservasi');
    Route::get('/pemesanan/pdf/{id}', [TamuController::class, 'pdf'])->name('create_pdf');


//  admin
    // dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('auth.login');

    //kamar
    Route::get('/admin/kamar', [KamarController::class, 'index'])->name('admin.kamar.index');
    Route::get('/admin/kamar/create', [KamarController::class, 'create'])->name('admin.kamar.create');
    Route::post('/admin/kamar/create/postdata', [KamarController::class, 'store'])->name('admin.kamar.create.postdata');
    Route::get('/admin/kamar/edit/{id}', [KamarController::class, 'edit'])->name('admin.kamar.edit');
    Route::post('/admin/kamar/update/{id}', [KamarController::class, 'update'])->name('admin.kamar.update');
    Route::get('/admin/kamar/delete/{id}', [KamarController::class, 'delete'])->name('admin.kamar.delete');

    // fasilitaskamar
    Route::get('/admin/fasikamar', FasiKamarController::class)->name('admin.fasikamar.index');
    Route::get('/admin/fasikamar/create', [FasiKamarController::class, 'create'])->name('admin.fasikamar.create');
    Route::post('/admin/fasikamar/create/postdata', [FasiKamarController::class, 'store'])->name('admin.fasikamar.create.postdata');
    Route::get('/admin/fasikamar/edit/{id}', [FasiKamarController::class, 'edit'])->name('admin.fasikamar.edit');
    Route::post('/admin/fasikamar/update/{id}', [FasiKamarController::class, 'update'])->name('admin.fasikamar.update');
    Route::get('/admin/fasikamar/delete/{id}', [FasiKamarController::class, 'delete'])->name('admin.fasikamar.delete');

    //fasilitashotel
    Route::get('/admin/fasihotel', [FasiHotelController::class, 'index'])->name('admin.fasihotel.index');
    Route::get('/admin/fasihotel/create', [FasiHotelController::class, 'create'])->name('admin.fasihotel.create');
    Route::post('/admin/fasihotel/create/postdata', [FasiHotelController::class, 'store'])->name('admin.fasihotel.create.postdata');
    Route::get('/admin/fasihotel/edit/{id}', [FasiHotelController::class, 'edit'])->name('admin.fasihotel.edit');
    Route::post('/admin/fasihotel/update/{id}', [FasiHotelController::class, 'update'])->name('admin.fasihotel.update');
    Route::get('/admin/fasihotel/delete/{id}', [FasiHotelController::class, 'delete'])->name('admin.fasihotel.delete');




//  resepsionis
Route::get('/resepsionis/dashboard', [ResepsionisController::class, 'index'])->name('auth.login');
Route::get('/resepsionis/reservasi', [ResepsionisController::class, 'reservasi'])->name('resepsionis.reservasi');
Route::get('/resepsionis/reservasi/delete/{id}', [TamuController::class, 'delete'])->name('resepsionis.reservasi.delete');

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisObatController;
use App\Http\Controllers\PenerimaanObatController;
use App\Http\Controllers\TransaksiGudangController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PolindesController;
use Illuminate\Auth\Events\Login;

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

Route::resource('/jenis-obat', JenisObatController::class);
Route::resource('/penerimaan-obat', PenerimaanObatController::class);
Route::resource('/obat', ObatController::class);
// Route::get('/obat/hapus/{name}','ObatController@hapus');
Route::resource('/dashboard', DashboardController::class);
Route::resource('/transaksi-gudang', TransaksiGudangController::class);
Route::get('/farmasi', [FarmasiController::class, 'index']);
Route::get('/farmasi/daftar-obat', [FarmasiController::class, 'index']);
Route::get('/farmasi/penerimaan-obat', [FarmasiController::class, 'penerimaanObat']);
Route::get('/farmasi/distribusi-obat', [FarmasiController::class, 'distribusiObat']);

//polindes
Route::get('/polindes', [PolindesController::class, "index"]);
Route::get('/polindes/{id}', [PolindesController::class, "show"]);

// Route Login
Route::get('/user/register', [UserController::class, 'register'])->name('register');
Route::post('/user/register', [UserController::class, 'register_action'])->name('register.action');
Route::get('/user/login', [UserController::class, 'login'])->name('login');
Route::post('/user/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/user/password', [UserController::class, 'password'])->name('password');
Route::post('/user/password', [UserController::class, 'password_action'])->name('password.action');
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');

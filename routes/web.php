<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\SppController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\LoginPetugasController;
use App\Http\Controllers\Admin\LoginSiswaController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::middleware(['checkRole'])->group(function () {

//SISWA
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/create', [SiswaController::class, 'tambah']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus']);

Route::get('/siswa/cetak', [SiswaController::class,'cetak_pdf']);


//KELAS
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas/create', [KelasController::class, 'tambah']);
Route::get('/kelas/update', [KelasController::class, 'update']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::put('/kelas/update/{id}', [KelasController::class, 'update']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'hapus']);

Route::get('/kelas/cetak', [KelasController::class,'cetak_pdf']);

//SPP
Route::get('/spp', [SppController::class, 'index']);
Route::get('/spp/create', [SppController::class, 'create']);
Route::post('/spp/create', [SppController::class, 'tambah']);
Route::get('/spp/update', [SppController::class, 'update']);
Route::get('/spp/edit/{id}', [SppController::class, 'edit']);
Route::put('/spp/update/{id}', [SppController::class, 'update']);
Route::get('/spp/hapus/{id}', [SppController::class, 'hapus']);

Route::get('/spp/cetak', [SppController::class,'cetak_pdf']);

//PETUGAS
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/petugas/create', [PetugasController::class, 'create']);
Route::post('/petugas/create', [PetugasController::class, 'tambah']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::post('/petugas/update/{id}', [PetugasController::class, 'update']);
Route::get('/petugas/hapus/{id}', [PetugasController::class, 'hapus']);

Route::get('/petugas/cetak', [PetugasController::class,'cetak_pdf']);

//PEMBAYARAN
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/create', [PembayaranController::class, 'create']);
Route::post('/pembayaran/create', [PembayaranController::class, 'tambah']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::get('/pembayaran/hapus/{id}', [PembayaranController::class, 'hapus']);

});


Route::get('/pembayaran/cetak', [PembayaranController::class,'cetak_pdf']);


Route::get('/history_pembayaran', [PembayaranController::class,'history_pembayaran']);
// //LOGIN PETUGAS
// Route::get('/login', [LoginPetugasController::class, 'index']);
// Route::post('/login', [LoginPetugasController::class, 'store']);

// //LOGIN SISWA
// Route::get('/login-siswa', [LoginSiswaController::class, 'index']);
// Route::post('/login-siswa', [LoginSiswaController::class, 'store']);

// Route::get('/logout', [LoginPetugasController::class, 'delete']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KriteriaController;
use App\Http\Controllers\admin\RespondenController;
use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\admin\TopsisController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // route group kriteria 
    Route::prefix('kriteria')->group(function () {
        Route::get('/', [KriteriaController::class, 'index'])->name('kriteria');
        // Route::get('/data', [KriteriaController::class, 'data'])->name('kriteria.data');

        // Route::get('/create', [KriteriaController::class, 'create'])->name('kriteria.create');
        Route::post('/store', [KriteriaController::class, 'store'])->name('kriteria.store');
        Route::get('/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
        // Route::post('/update/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
        Route::delete('/store/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.delete');
    });

    // route group guru
    Route::prefix('guru')->group(function () {
        Route::get('/', [GuruController::class, 'index'])->name('guru');

        // Route::get('/create', [GuruController::class, 'create'])->name('guru.create');
        Route::post('/store', [GuruController::class, 'store'])->name('guru.store');
        Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
        // Route::post('/update/{id}', [GuruController::class, 'update'])->name('guru.update');
        Route::delete('/store/{id}', [GuruController::class, 'destroy'])->name('guru.delete');
    });

    // route group siswa
    Route::prefix('siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('siswa');

        // Route::get('/create', [SiswaController::class, 'create'])->name('siswa.create');
        Route::post('/store', [SiswaController::class, 'store'])->name('siswa.store');
        Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
        // Route::post('/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
        Route::delete('/store/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
    });

    // route group responden
    Route::prefix('responden')->group(function () {
        Route::get('/', [RespondenController::class, 'index'])->name('responden');
        // Route::get('/create', [RespondenController::class, 'create'])->name('responden.create');
        Route::get('/edit/{id}', [RespondenController::class, 'edit'])->name('responden.edit');
        // Route::post('/update/{id}', [RespondenController::class, 'update'])->name('responden.update');
        Route::get('/delete/{id}', [RespondenController::class, 'destroy'])->name('responden.delete');
    });

    Route::prefix('topsis')->group(function () {
        Route::get('/', [TopsisController::class, 'index'])->name('topsis');
        // Route::get('/create', [TopsisController::class, 'create'])->name('responden.create');
        Route::get('/edit/{id}', [TopsisController::class, 'edit'])->name('topsis.edit');
        // Route::post('/update/{id}', [TopsisController::class, 'update'])->name('responden.update');
        Route::get('/delete/{id}', [TopsisController::class, 'destroy'])->name('topsis.delete');
    });

    // route group user
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        // Route::get('/create', [UserController::class, 'create'])->name('user.create');
        // Route::post('/store', [UserController::class, 'store'])->name('user.store');
        // Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        // Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        // Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });

    
    



    //logout 
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::get('/authSiswa', [AuthController::class, 'indexSiswa'])->name('loginSiswa');
Route::post('/auth/login', [AuthController::class, 'authLogin'])->name('authLogin');
Route::post('/auth/loginSiswa', [AuthController::class, 'authLoginSiswa'])->name('authLoginSiswa');
Route::post('/store', [RespondenController::class, 'store'])->name('storeResponden');





// Route::get('/', function () {
//     return view('welcome');
// });

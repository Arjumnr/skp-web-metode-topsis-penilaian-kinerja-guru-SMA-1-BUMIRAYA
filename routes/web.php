<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KriteriaController;
use App\Http\Controllers\admin\RespondenController;
use App\Http\Controllers\admin\GuruController;
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
        // Route::post('/store', [KriteriaController::class, 'store'])->name('kriteria.store');
        Route::get('/edit/{id}', [KriteriaController::class, 'edit'])->name('kriteria.edit');
        // Route::post('/update/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
        Route::get('/delete/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.delete');
    });

    // route group guru
    Route::prefix('guru')->group(function () {
        Route::get('/', [GuruController::class, 'index'])->name('guru');

        // Route::get('/create', [GuruController::class, 'create'])->name('guru.create');
        // Route::post('/store', [GuruController::class, 'store'])->name('guru.store');
        Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
        // Route::post('/update/{id}', [GuruController::class, 'update'])->name('guru.update');
        Route::get('/delete/{id}', [GuruController::class, 'destroy'])->name('guru.delete');
    });

    // route group responden
    Route::prefix('responden')->group(function () {
        Route::get('/', [RespondenController::class, 'index'])->name('responden');
        // Route::get('/create', [RespondenController::class, 'create'])->name('responden.create');
        Route::get('/edit/{id}', [RespondenController::class, 'edit'])->name('responden.edit');
        // Route::post('/update/{id}', [RespondenController::class, 'update'])->name('responden.update');
        Route::get('/delete/{id}', [RespondenController::class, 'destroy'])->name('responden.delete');
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
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'authLogin'])->name('authLogin');
Route::post('/store', [RespondenController::class, 'store'])->name('storeResponden');





// Route::get('/', function () {
//     return view('welcome');
// });

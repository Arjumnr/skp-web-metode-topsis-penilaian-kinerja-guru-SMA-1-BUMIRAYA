<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
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


    //logout 
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'authLogin'])->name('authLogin');


// Route::get('/', function () {
//     return view('welcome');
// });

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

// LOGIN LOGOUT
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth']);
});
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// HOME & DASHBOARD
Route::get('/', [HomeController::class, 'index']);

// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'admin']);
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);
});

// SUPPLIER
Route::group(['prefix' => 'supplier', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'supplier']);
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);
});
// Route::get('/supplier/dashboard', [HomeController::class, 'supplier'])->middleware('auth');
Route::get('/buyer/dashboard', [HomeController::class, 'buyer'])->middleware('auth');

Route::get('/katalog', function () {
    return view('katalog.index');
});

Route::get('/tentang', function () {
    return view('tentang.index');
});

Route::get('/kontak', function () {
    return view('kontak.index');
});

Route::get('/tutorial', function () {
    return view('tutorial.index');
});

Route::get('/tutorial/detail', function () {
    return view('tutorial.detail');
});

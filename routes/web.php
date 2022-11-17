<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// REGISTER
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'store']);


// HOME & DASHBOARD
Route::get('/', [HomeController::class, 'index']);

// SUPER ADMIN
Route::group(['prefix' => 'super_admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'super_admin']);
    // Route::get('/notification', [NotificationController::class, 'index']);
    // Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-konten', [UserController::class, 'update_konten']);
    // Route::post('/products/update', [ProductController::class, 'update']);
});
// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'admin']);
    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);
    Route::post('/products/update', [ProductController::class, 'update']);
});

// SUPPLIER
Route::group(['prefix' => 'supplier', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'supplier']);
    Route::get('/edit-profil', [UserController::class, 'edit']);
    Route::post('/update-profil', [UserController::class, 'update']);
    Route::post('/products/store', [ProductController::class, 'store']);
});
// Route::get('/supplier/dashboard', [HomeController::class, 'supplier'])->middleware('auth');
Route::get('/buyer/dashboard', [HomeController::class, 'buyer'])->middleware('auth');

Route::get('/katalog', [GuestController::class, 'katalog']);
Route::get('/tentang', [GuestController::class, 'tentang']);
Route::get('/tutorial', [GuestController::class, 'tutorial']);
Route::get('/kontak', [GuestController::class, 'kontak']);
// Route::get('/katalog', GuestController::class, 'katalog');


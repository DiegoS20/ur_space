<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::prefix('catalogo')->group(function () {
    Route::get('/', function () {
        return view('catalogo.index');
    });
});

Route::get('login', function () {
    return view('login');
})->name('login_page');

Route::prefix('users')->group(function () {
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware(Authenticate::class)->group(function () {
    Route::get('/perfil', [UserController::class, 'profile'])->name('profile');
});
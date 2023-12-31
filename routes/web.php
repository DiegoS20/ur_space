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
    })->name('catalogue');

    Route::get('/detalle', function () {
        return view('catalogo.detalle');
    })->name('detalle-catalogo');
});

Route::get('login', function () {
    return view('login');
})->name('login_page');

Route::get('soporte', function () {
    return view('soporte');
})->name('soporte');

Route::prefix('users')->group(function () {
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware(Authenticate::class)->group(function () {
    Route::prefix('perfil')->group(function () {
        Route::get('/', [UserController::class, 'profile'])->name('profile');
        Route::get('/favoritos', [UserController::class, 'favorites'])->name('favorites');
        Route::get('/propiedades', [UserController::class, 'estate'])->name('estate');
    });
});
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;

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
Route::middleware('autenticador')->group(function(){
    Route::get('/index', [SupportController::class, 'index'])->name('support.index');
    Route::get('/contact', [SupportController::class, 'create'])->name('support.create');
    Route::get('/contact/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
    Route::put('/contact/{id}', [SupportController::class, 'update'])->name('support.update');
    Route::delete('/index/{id}',[SupportController::class, 'destroy'])->name('support.destroy');
    Route::post('/contact', [SupportController::class, 'store'])->name('support.store');

});

//HomePage
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//UsuarioRoute
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');


Route::fallback(function () {
    return redirect()->route('home.index'); 
});
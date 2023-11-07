<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportController;


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

Route::get('/index', [SupportController::class, 'index'])->name('support.index');
Route::get('/contact', [SupportController::class, 'create'])->name('support.create');
Route::get('/contact/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/contact/{id}', [SupportController::class, 'update'])->name('support.update');
Route::delete('/index/{id}',[SupportController::class, 'destroy'])->name('support.destroy');
Route::post('/contact', [SupportController::class, 'store'])->name('support.store');

//HomePage
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
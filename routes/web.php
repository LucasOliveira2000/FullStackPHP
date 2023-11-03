<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [SupportController::class, 'index'])->name('support.index');
Route::get('/contact', [SupportController::class, 'create'])->name('support.create');
Route::post('/contact', [SupportController::class, 'store'])->name('support.store');


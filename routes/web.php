<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WishController;
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
Route::get('/', [PagesController::class, 'index']);
Route::get('/pengundang', [PagesController::class, 'pengundang']);
Route::get('/sendundangan', [PagesController::class, 'sendundangan']);
Route::post('/generate', [PagesController::class, 'generate'])->name('pages.generate');
Route::resource('postwish', WishController::class);
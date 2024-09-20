<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PageController::class, 'index'] )->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'] )->name('about');
Route::get('/contatti', [PageController::class, 'contacts'] )->name('contacts');
Route::resource('comics', ComicController::class);
Route::get('comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
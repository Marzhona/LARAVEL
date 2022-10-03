<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/form', [\App\Http\Controllers\Book_FormController::class, 'book_form']);
Route::get('/book', [\App\Http\Controllers\BookController::class, 'book']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about']);
Route::get('/package', [\App\Http\Controllers\PackageController::class, 'package']);

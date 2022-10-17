<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Book_FormController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;




Route::get('/', function () {
    return redirect()->route('package');
});

Route::resource('package',PackageController::class);
Route::get('package/delete/{destination}',[PackageController::class, 'destroy'])->name('package.delete');
Route::get('/', [HomeController::class, 'home']);
Route::get('/form', [Book_FormController::class, 'book_form']);
Route::get('/book', [BookController::class, 'book']);
Route::get('/about', [AboutController::class, 'about']);

Route::get('/register',[RegisterController::class, 'create'])->name('register.form');
Route::post('/register',[RegisterController::class ,'register'])->name('register');
Route::get('/login',[LoginController::class, 'create'])->name('login.form');
Route::post('/login',[LoginController::class ,'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('upload', [UploadController::class, 'upload']);


//Route::get('/package', [PackageController::class, 'package'])->name('package');
//Route::get('/create', [PackageController::class, 'create'])->name('create');
//Route::get('/package/{package}',[PackageController::class, 'show'])->name('show');
//Route::post('/package',[PackageController::class, 'store'])->name('store');


//Route::get('/',function(){
//    return redirect()->route('package');
//});
//Route::resource('package',PackageController::class);

//Route::get('/', function (){
//return redirect()->route('posts.index');
//});
//Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index');
//Route::get('/posts/create',[\App\Http\Controllers\PostController::class,'create'])->name('posts.create');


//Route::get('create',[\App\Http\Controllers\HomeController::class,'create'])->name('create');

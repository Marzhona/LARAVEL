<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/package',[\App\Http\Controllers\API\PackageController::class, 'index']);
Route::post('/edit/{destination}',[\App\Http\Controllers\API\PackageController::class, 'edit']);

Route::post('/create',[\App\Http\Controllers\API\PackageController::class, 'create']);
Route::delete('/destroy/{destination}',[\App\Http\Controllers\API\PackageController::class, 'destroy']);

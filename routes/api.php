<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookCheckoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'home']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);



Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);



Route::get('/bookcheckouts', [BookCheckoutController::class, 'index']);
Route::post('/bookcheckouts', [BookCheckoutController::class, 'store']);
Route::delete('/bookcheckouts/{id}', [BookCheckoutController::class, 'destroy']);
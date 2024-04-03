<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\VoucherController;

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

Route::get('index', [UserController::class, 'index']);
Route::post('create', [UserController::class, 'create']);
Route::put('users/update/{id}', [UserController::class, 'update']);
Route::delete('users/delete/{id}', [UserController::class, 'delete']);
Route::resource('authors', AuthorController::class);
Route::resource('genres', GenreController::class);
Route::resource('books', BookController::class);
Route::resource('status', StatusController::class);
Route::resource('roles', RolController::class);
Route::resource('copies', CopyController::class);
Route::resource('librarians', LibrarianController::class);
Route::resource('vouchers', VoucherController::class);

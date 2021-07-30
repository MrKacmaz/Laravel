<?php

use App\Http\Controllers\newUserSign;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Middleware\login;

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

// PRODUCT
Route::get('/home', [ProductsController::class, 'home']);
Route::get('/electronic', [ProductsController::class, 'index']);
Route::get('/mechanism', [ProductsController::class, 'mechanism']);
Route::get('/architect', [ProductsController::class, 'architect']);


// SIGN
Route::get('/', [ProductsController::class, 'signIn']);
Route::post('/userLogin', [ProductsController::class, 'home'])->middleware(login::class);
Route::post('/newUserSign', [newUserSign::class, 'addDbNewUser']);

// Route::post('/newUserSign', [ProductsController::class, 'newUserStore'])->name('newUserName', 'newUserSurname', 'newUserEmail', 'newUserPassword');
// Route::get('/newUserSign', [ProductsController::class, 'newUserStore'])->name('newUserName', 'newUserSurname', 'newUserEmail', 'newUserPassword');




// Route::post('/userLogin', [login::class, 'handle'])->middleware();
// Route::post('/userLogin', [login::class, 'handle'])->middleware(login::class);

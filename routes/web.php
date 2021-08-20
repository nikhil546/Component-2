<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/', [ProductController::class, 'makeProductArray']);
Route::get('/edit/{id}', [ProductController::class, 'getProductWithId']);
Route::post('/create', [ProductController::class, 'addNewProduct']);
Route::post('/update/{id}',[ProductController::class, 'updateProductwithId']);
Route::get('/delete/{id}',[ProductController::class, 'deleteProductWithId']);
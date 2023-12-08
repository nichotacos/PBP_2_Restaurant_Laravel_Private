<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Models\Cart;
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

Route::apiResource('user', UserController::class);
Route::post('user/login', [UserController::class, 'login']);
Route::put('user/forgotpw/{id}', [UserController::class, 'changePassword']);
Route::put('user/updateimage/{id}', [UserController::class, 'updateImage']);

Route::get('cart/findAvail/{id}', [CartController::class, 'findAvail']);
Route::get('cart/find/{id}', [CartController::class, 'find']);
Route::apiResource('cart', CartController::class);


Route::apiResource('items', ItemController::class);


// Route::post('/user/login', 'App\Http\Controllers\Api\UserController@login');

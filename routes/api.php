<?php

use App\Http\Controllers\AdapterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
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
Route::get('/item', [ItemController::class, 'getAll']);
Route::post('/item', [ItemController::class, 'add']);
Route::get('/item/{id}', [ItemController::class, 'getOne']);

Route::get('/category', [CategoryController::class, 'getAll']);
Route::post('/category', [CategoryController::class, 'add']);
Route::get('/category/{id}', [CategoryController::class, 'getOne']);


Route::get('/adapter', [AdapterController::class, 'getAll']);
Route::post('/adapter', [AdapterController::class, 'add']);
Route::get('/adapter/{id}', [AdapterController::class, 'getOne']);


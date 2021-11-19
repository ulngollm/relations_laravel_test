<?php

use App\Http\Controllers\AdapterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OwnerController;
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
Route::get('/item/{id}/adapter', [ItemController::class, 'getAdapterForOne']);
Route::get('/item/{id}/owner', [ItemController::class, 'getItemOwners']);
Route::delete('/item/{id}', [ItemController::class, 'delete']);



Route::get('/category', [CategoryController::class, 'getAll']);
Route::post('/category', [CategoryController::class, 'add']);
Route::get('/category/{id}', [CategoryController::class, 'getOne']);
Route::get('/category/{id}/item', [CategoryController::class, 'getItemsOfOne']);



Route::get('/adapter', [AdapterController::class, 'getAll']);
Route::post('/adapter', [AdapterController::class, 'add']);
Route::get('/adapter/{id}', [AdapterController::class, 'getOne']);
Route::get('/adapter/{id}/item', [AdapterController::class, 'getAdapterItem']);


Route::get('/owner', [OwnerController::class, 'getAll']);
Route::get('/owner/{id}', [OwnerController::class, 'getOne']);
Route::get('/owner/{id}/item', [OwnerController::class, 'getItemsOfOne']);


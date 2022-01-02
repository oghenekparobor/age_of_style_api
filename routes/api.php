<?php

use App\Http\Controllers\AOSController;
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

Route::get('/category', [AOSController::class, 'category']);
Route::get('/sub/category', [AOSController::class, 'subCategory']);
Route::get('/settings', [AOSController::class, 'setting']);
Route::get('/contestants', [AOSController::class, 'contestants']);
Route::post('/contestant/vote', [AOSController::class, 'vote']);

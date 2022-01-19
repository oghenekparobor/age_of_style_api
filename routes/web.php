<?php

use App\Http\Controllers\AOSWebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AOSWebController::class, 'index']);
Route::get('/logout',[AOSWebController::class, 'logout']);
Route::post('/login',[AOSWebController::class, 'login']);

Route::get('/contestants',[AOSWebController::class, 'viewContestants']);
Route::get('/contestant/add',[AOSWebController::class, 'contestants']);
Route::post('/contestant/add',[AOSWebController::class, 'store']);
Route::get('/contestant/remove/{id}',[AOSWebController::class, 'removeContestant']);

Route::get('/category',[AOSWebController::class, 'allCategory']);
Route::get('/category/{id}',[AOSWebController::class, 'viewCategory']);
Route::post('/category/sub/add/{id}',[AOSWebController::class, 'addSubCategory']);
Route::get('/new/category',[AOSWebController::class, 'categoryAdd']);
Route::post('/new/category',[AOSWebController::class, 'createCategory']);
Route::get('/category/remove/{id}',[AOSWebController::class, 'removeCategory']);
Route::get('/sub/category/remove/{id}',[AOSWebController::class, 'removeSubCategory']);

Route::get('/settings',[AOSWebController::class, 'settings']);
Route::get('/ca',[AOSWebController::class, 'cate']);
Route::post('/date/{id}',[AOSWebController::class, 'saveSettings']);





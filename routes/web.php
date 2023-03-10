<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/',[TodoController::class,'list']);
Route::get('/', [TodoController::class, 'list']);
Route::post('/create', [TodoController::class, 'create']);
Route::post('/update', [TodoController::class, 'update']);
Route::get('/delete', [TodoController::class, 'delete']);
Route::post('/delete', [TodoController::class, 'remove']);
Route::get('/test', [TodoController::class, 'test']);

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

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
Route::get('/', [ AuthController::class, 'index']);
Route::get('/index', [ todoController::class, 'index']);

Route::get('/create' , [ todoController::class, 'create' ]);
Route::post('/create' , [ todoController::class, 'store' ]);

Route::get('/complete/{id}' , [ todoController::class, 'complete' ]);
Route::get('/incomplete/{id}' , [ todoController::class, 'incomplete' ]);

Route::get('/delete/{id}' , [ todoController::class, 'destroy' ]);

Route::get('/edit/{id}' , [todoController::class, 'edit']);
Route::post('/edit/{id}' , [todoController::class, 'update' ]);

Route::get('/login', [ AuthController::class, 'login']);
Route::post('login/authenticate', [ AuthController::class, 'authenticate']);

Route::get('/register', [ AuthController::class, 'register']);
Route::post('/register', [ AuthController::class, 'registerPost']);
Route::post('/index', [ AuthController::class, 'logout']);


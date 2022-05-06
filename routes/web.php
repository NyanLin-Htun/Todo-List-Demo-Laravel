<?php

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

Route::get('/', [ todoController::class, 'index']);

Route::get('/create' , [ todoController::class, 'create' ]);
Route::post('/create' , [ todoController::class, 'store' ]);

Route::get('/complete/{id}' , [ todoController::class, 'complete' ]);
Route::get('/incomplete/{id}' , [ todoController::class, 'incomplete' ]);

Route::get('/delete/{id}' , [ todoController::class, 'destroy' ]);

Route::get('/edit/{id}' , [todoController::class, 'edit']);
Route::post('/edit/{id}' , [todoController::class, 'update' ]);


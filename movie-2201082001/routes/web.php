<?php

use App\Http\Controllers\SandraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/', [SandraController::class, 'index'] );
Route::get('/',[SandraController::class, 'index']);
Route::get('/movie/{id}', [SandraController::class, 'detail']);
Route::get('/watchlist', [SandraController::class, 'watchlist']);


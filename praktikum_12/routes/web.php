<?php

use App\Http\Controllers\TablesController;
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


Route::get('/', [TablesController::class, 'index']);
Route::get('/tables', [TablesController::class, 'index']);
Route::get('/data-tables', [TablesController::class, 'dataTables']);

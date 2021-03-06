<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class, 'comingSoon']);
//Route::redirect('/', '/coming-soon',301);
Route::get('/coming-soon', [HomeController::class, 'comingSoon']);
Route::get('/news', [NewsController::class, 'index']);
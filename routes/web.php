<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\WhatWeDoController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\Controller;

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

Route::get('/', [HomeController::class, 'index']);
//Route::redirect('/', '/coming-soon',301);
Route::get('/coming-soon', [HomeController::class, 'comingSoon']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/start-a-project', [ContactController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/privacy', [PrivacyController::class, 'index']);
Route::get('/disclaimer', [DisclaimerController::class, 'index']);
Route::get('/who-we-are', [WhoWeAreController::class, 'index']);
Route::get('/what-we-do', [WhatWeDoController::class, 'index']);
Route::get('/join-us', [JoinUsController::class, 'index']);
Route::get('/join-us/talent-application/{role}', [JoinUsController::class, 'show']);
Route::get('/join-us/talent-application', [JoinUsController::class, 'showTalentApplication']);
Route::get('/join-us/thank-you', [JoinUsController::class, 'showTalentApplication']);
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 1;
});
Route::get('/chmod', function() {
    $output = shell_exec('sudo chmod -R 775 ~/var/www/html/tntmedia/resources');
    return "Chmoded";
});

Route::any('{catchall}', [Controller::class, 'notfound'])->where('catchall', '.*');


<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CaptchaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware("auth")->prefix("dashboard")->group(function(){
    Route::get('/user-lists', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('article', ArticleController::class);
});


Route::get('/reload-captcha', [CaptchaController::class, 'reloadCaptcha']);

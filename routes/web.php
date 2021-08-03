<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Auth;
use App\Console\RemindMail;

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

Route::get('/sample',[SampleController::class, 'index']);
Route::get('/',[HelloController::class, 'index']);

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/top',[TopController::class, 'index']);

    Route::get('/review',[ReviewController::class, 'confirm']);

    Route::post('/send',[SendController::class, 'confirm']);
    Route::patch('/send/update',[SendController::class, 'index']);

});

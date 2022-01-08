<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\mailer;
use App\Http\Controllers\mailcontrol;
use App\Http\Controllers\Emailcontroller;

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

Route::get('/nksbrands', function () {
    return view('index1');
});
Route::get('/nksbrands/about', function () {
    return view('about');
});
Route::get('/nksbrands/contact', function () {
    return view('contact');
});
Route::get('/nksbrands/headlight', function () {
    return view('head');
});
Route::get('/nksbrands/wechat', function () {
    return view('we');
});
Route::get('/nksbrands/savedata', function () {
    return view('welcome');
});
Route::get('/inquiry', [EmailController::class, 'create']);
Route::post('/mailInq', [EmailController::class, 'sendEmail'])->name('send.email');
Route::post('/senddata', [Form::class, 'saveData']);



<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/register', [RegisterController::class, 'create'])->name("register")
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//login and remember me
Route::get('/login', [LoginController::class, 'create'])->name("login")
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);


//login and remember me
Route::get('/login', [LoginController::class, 'create'])->name("login")
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);


Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password')
    ->middleware('guest');
//
Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);
//
Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

Route::get('/test', function () {
    return view('test');

})->middleware('auth');


//redacteur
Route::get('/redacteur', function () {
    return view('redacteur.dashboard');
})->middleware('auth');
Route::get('/create', function () {
    return view('redacteur.createTemplate');
});
Route::get('/templates', function () {
    return view('redacteur.templates');
});
Route::get('/upload', function () {
    return view('redacteur.upload');
});
Route::get('/media', function () {
    return view('redacteur.media');
});

//dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');



// Password Reset Routes
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset')
    ->middleware('guest');

Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

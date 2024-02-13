<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\UserController;
use App\Models\Media;
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

//Media
//Route::get('/upload', function () {
//    return view('redacteur.upload');
//});

Route::get  ('/upload', [MediaController::class, 'index'])->name('upload');

Route::post('/upload', [MediaController::class, 'upload'])->name('upload');


//Route::get('/all-media', function () {
//    return view('redacteur.media');
//});
Route::get('/all-media', [MediaController::class, 'show']);

Route::get('/members', function () {
    return view('redacteur.subscribers');
});

//Route::get('/add-media', function () {
//    Media::create()
//
//        ->addMedia(storage_path('demo/library-dublin.jpg'))
//        ->toMediaCollection();
//
//});

//Route::get('/subscribers', function () {
//    return view('redacteur.subscribers');
//});
Route::get('/subscribers', [NewsLetterController::class, 'showS']);




//Admin

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

//Route::get('/members', function () {
//    return view('admin.subscribers');
//});

Route::get('/members', [NewsLetterController::class, 'show']);

Route::get('/allusers', function () {
    return view('admin.allusers');
});
Route::get('/allusers', [UserController::class, 'show']);
Route::post('/allusers/{id}', [UserController::class, 'update']);
Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);

Route::get('/deletedUsers', [UserController::class, 'showDeletedUsers']);

Route::post('/restore/{id}', [UserController::class, 'restoreUser']);


Route::get('/templates', function () {
    return view('admin.templates');
});

Route::get('/media', function () {
    return view('admin.media');
});

//Route::get('/editRole', function () {
//    return view('admin.editRole');
//});


// Password Reset Routes
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset')
    ->middleware('guest');

Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

//Route::get('/welcome' , [NewsLetterController::class, 'index'])->name('welcome');
Route::post('/subscribe', [NewsLetterController::class, 'subscribe'])->name('subscribe');

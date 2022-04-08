<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/new-login', function () {
    return view('test.new-login-last');
});

Route::get('/new-register', function () {
    return view('register');
});

Auth::routes();


Route::middleware(['auth'])->group( function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/compliance-training', function () {
        return view('training.video');
    });
});

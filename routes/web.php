<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginVerification;
use App\Http\Controllers\signupController;

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
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/search', function () {
    return view('search');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/reg', function () {
    return view('reg');
})->name('reg');;

Route::post('login', [loginVerification::class, 'login']);
Route::post('reg', [signupController::class, 'signup']);
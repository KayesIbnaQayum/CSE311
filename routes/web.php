<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginVerification;
use App\Http\Controllers\signupController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\jobController;
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

Route::get('/profile',  [profileController::class, 'profileView']);

Route::get('/search/{searchValue}',[searchController::class, 'search']);
Route::post('searcha',[searchController::class, 'searchfromMenu']);


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/reg', function () {
    return view('reg');
})->name('reg');;

Route::post('login', [loginVerification::class, 'login']);
Route::post('reg', [signupController::class, 'signup']);


Route::get('/edit', [profileController::class, 'index']);
Route::post('/edit', [profileController::class, 'update']);


Route::get('/project/{id}', [projectController::class, 'index']);

Route::get('/postjob', function () {
    return view('postJob');
});

Route::get('/myjob', [profileController::class, 'myjob']);

Route::get('/bid', function () {
    return view('bid');
});

Route::post('/bid', [jobController::class, 'bid']);
Route::get('/bidlist/{id}', [jobController::class, 'bidlist']);
Route::post('/bidlist/bidcon', [jobController::class, 'bidcon']);

Route::post('/postjob', [jobController::class, 'postjob']);


Route::get('/workprofile',[profileController::class, 'workprofile']);
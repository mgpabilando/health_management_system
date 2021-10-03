<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UsersController; */

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

/*laravel controller*/
/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Auth.login');
});

/* Route::get('/login', [CustomAuthController::class, 'index'])->name('auth.login');
Route::post('/save', [CustomAuthController::class, 'customlogin'])->name('login.custom'); 

Route::post('/signout', [CustomAuthController::class, 'signout'])->name('signout');

Route::resource('user', UsersController::class);

Route::get('/dashboard', [CustomAuthController::class, 'homedashboard'])->name('homedashboard');
 
 */

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware'=>['admin','auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    /* Route::get('/login', [AdminController::class, 'index'])->name('auth.login'); */

});

Route::group(['prefix' => 'user','middleware'=>['user','auth']], function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    /* Route::get('/login', [UserController::class, 'index'])->name('auth.login'); */
});

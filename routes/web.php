<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UsersController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */


Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/login', [CustomAuthController::class, 'index'])->name('auth.login');
Route::post('/save', [CustomAuthController::class, 'customlogin'])->name('login.custom'); 

Route::post('/signout', [CustomAuthController::class, 'signout'])->name('signout');

Route::resource('user', UsersController::class);

Route::get('/dashboard', [CustomAuthController::class, 'homedashboard'])->name('homedashboard');
 

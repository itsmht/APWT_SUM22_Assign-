<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'welcome'])->name('users.welcome');
Route::get('/users.reg',[UserController::class, 'reg'])->name('users.reg');
Route::post('/users.reg',[UserController::class, 'regSubmit'])->name('users.reg.submit');
Route::get('/users.login',[UserController::class, 'login'])->name('users.login');
Route::post('/users.login',[UserController::class, 'loginSubmit'])->name('users.login.submit');
Route::get('/users.userdashboard',[UserController::class, 'ud'])->name('users.userdashboard');
Route::get('/users.admindashboard',[UserController::class, 'ad'])->name('users.admindashboard');
Route::get('/users.details/{id}', [UserController::class, 'details'])->name('users.details');


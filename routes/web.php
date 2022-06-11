<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Models\Person;

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

Route::get('/', [PersonController::class, 'welcome'])->name('users.welcome');
Route::get('/users.reg',[PersonController::class, 'reg'])->name('users.reg');
Route::post('/users.reg',[PersonController::class, 'regSubmit'])->name('users.reg.submit');
Route::get('/users.login',[PersonController::class, 'login'])->name('users.login');
Route::post('/users.login',[PersonController::class, 'loginSubmit'])->name('users.login.submit');
Route::get('/users.userdashboard',[PersonController::class, 'ud'])->name('users.userdashboard');
Route::get('/users.admindashboard',[PersonController::class, 'ad'])->name('users.admindashboard');
Route::get('/users.details/{id}', [PersonController::class, 'details'])->name('users.details');


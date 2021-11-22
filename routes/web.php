<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'dashboard'])->name('home');
    //Settings
    Route::prefix('settings')->group(function (){
        Route::get('/account', [SettingsController::class, 'account'])->name('account');
        Route::get('/personal', [SettingsController::class, 'personal'])->name('personal');
        Route::get('/password', [SettingsController::class, 'password'])->name('password');
    });
});



Route::group(['middleware' => ['auth', 'role:Admin|Staff']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('file', FileController::class);
});












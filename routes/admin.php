<?php

use App\Http\Controllers\admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
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




Route::group(['namespace' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
});



Route::group(["namespace" => "admin", "middleware" => "guest:admin"], function () {
    Route::get('login', 'AdminLoginController@getlogin')->name('admin.getLogin');
    Route::post('login', 'AdminLoginController@login')->name('admin.login');
    // Route::get('insert', 'AdminLoginController@insert');
});







// Route::prefix('admin')->middleware(['guest:admin', 'verified'])->group(function () {
//     // Route::get('', [HomeController::class, 'index'])->name('agent.home');

// });

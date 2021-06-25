<?php

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

Route::group(['namespace' => 'client'], function () {
    Route::get('/', 'HomeController@index')->name('client.home');
    Route::get('/Shopping-cart', 'ShoppingCartController@Index')->name('client.cart');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

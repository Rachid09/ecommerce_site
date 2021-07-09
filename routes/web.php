<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    return view('client.home');
})->name('client.home');


Route::get('/login', function () {
    return view('client.login');
});



Auth::routes();

define('PAGINATION_COUNT', 5);

//******************************************LANGUAGES***************************************
Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', 'LanguagesController@index')->name('admin.languages');
        Route::get('/create', 'LanguagesController@create')->name('admin.languages.create');
        Route::post('/store', 'LanguagesController@store')->name('admin.languages.store');
        Route::get('/edit/{id}', 'LanguagesController@edit')->name('admin.languages.edit');
        Route::post('/update/{id}', 'LanguagesController@update')->name('admin.languages.update');
        Route::get('delete/{id}', 'LanguagesController@destroy')->name('admin.languages.delete');
    });


    //********************************************Main categories********************************** */

    Route::group(['prefix' => 'main-categories'], function () {
        Route::get('/', 'MainCategoriesController@index')->name('admin.maincategories');
        Route::get('/create', 'MainCategoriesController@create')->name('admin.maincategories.create');
        Route::post('/store', 'MainCategoriesController@store')->name('admin.maincategories.store');
        Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.maincategories.edit');
        Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.maincategories.update');
        Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.maincategories.delete');
        Route::get('changeStatus/{id}', 'MainCategoriesController@changeStatus')->name('admin.maincategories.status');
    });

    ######################### End  Main categories Routes  ########################



    ######################### Begin sellers Routes ########################
    Route::group(['prefix' => 'sellers'], function () {
        Route::get('/', 'SellersController@index')->name('admin.sellers');
        Route::get('create', 'SellersController@create')->name('admin.sellers.create');
        Route::post('store', 'SellersController@store')->name('admin.sellers.store');
        Route::get('edit/{id}', 'SellersController@edit')->name('admin.sellers.edit');
        Route::post('update/{id}', 'SellersController@update')->name('admin.sellers.update');
        Route::get('delete/{id}', 'SellersController@destroy')->name('admin.sellers.delete');
        Route::get('changeStatus/{id}', 'SellersController@changeStatus')->name('admin.sellers.status');
    });
    ######################### End  sellers Routes  ########################

    ######################### Begin SubCategories Routes ########################
    Route::group(['prefix' => 'sub-categories'], function () {
        Route::get('/', 'SubCategoryController@index')->name('admin.subcategories');
        Route::get('create', 'SubCategoryController@create')->name('admin.subcategories.create');
        Route::post('store', 'SubCategoryController@store')->name('admin.subcategories.store');
        Route::get('edit/{id}', 'SubCategoryController@edit')->name('admin.subcategories.edit');
        Route::post('update/{id}', 'SubCategoryController@update')->name('admin.subcategories.update');
        Route::get('delete/{id}', 'SubCategoryController@destroy')->name('admin.subcategories.delete');
        Route::get('changeStatus/{id}', 'SubCategoryController@changeStatus')->name('admin.subcategories.status');
        // Route::post('append-category-level', 'SubCategoryController@appendCategoryLevel')->name('append-category-level');
        // Route::post('/edit/append-category-level', 'SubCategoryController@appendCategoryLevel')->name('edit.append-category-level');
    });

    ######################### End SubCategories Routes ########################
});

Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showAdminLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@adminLogin')->name('admin.login');
});

// Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
//     Route::post('logout', 'AuthController@logout')->name('admin.logout');
// });







######################### brgin seller Routes ########################

Route::group(['prefix' => 'seller', 'namespace' => 'seller', 'middleware' => 'auth:seller'], function () {
    Route::get('/home', 'DashboardController@index')->name('seller.dashboard');
});



Route::group(['prefix' => 'seller', 'namespace' => 'Auth', 'middleware' => 'guest:seller'], function () {
    Route::get('login', 'LoginController@showsellerLoginForm')->name('seller.login');
    Route::post('login', 'LoginController@sellerLogin')->name('seller.login');
    Route::get('register', 'RegisterController@showSellerRegisterForm')->name('seller.register');
    Route::post('register', 'RegisterController@sellerRegister')->name('seller.register');
    // Route::post('logout', 'LoginController@logout')->name('seller.logout');
});

// Route::group(['prefix' => 'seller', 'namespace' => 'seller'], function () {
//     Route::post('logout', 'AuthController@logout')->name('seller.logout');
// });





// Route::view('/home', 'home')->middleware('auth');
// Route::view('/admin', 'admin');
















######################### brgin client Routes ########################

Route::group(['prefix' => 'client', 'namespace' => 'Auth', 'middleware' => 'guest'], function () {
    Route::get('login', 'LoginController@showClientLoginForm')->name('client.login');
    Route::post('login', 'LoginController@clientLogin')->name('client.login');
});

<?php

// use App\Http\Controllers\admin\AdminLoginController;
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

// Auth::routes();

// define('PAGINATION_COUNT', 5);

// //******************************************LANGUAGES***************************************
// Route::group(['namespace' => 'admin', 'middleware' => 'auth:admin'], function () {
//     Route::get('/', 'DashboardController@index')->name('admin.dashboard');
//     Route::group(['prefix' => 'languages'], function () {
//         Route::get('/', 'LanguagesController@index')->name('admin.languages');
//         Route::get('/create', 'LanguagesController@create')->name('admin.languages.create');
//         Route::post('/store', 'LanguagesController@store')->name('admin.languages.store');
//         Route::get('/edit/{id}', 'LanguagesController@edit')->name('admin.languages.edit');
//         Route::post('/update/{id}', 'LanguagesController@update')->name('admin.languages.update');
//         Route::get('delete/{id}', 'LanguagesController@destroy')->name('admin.languages.delete');
//     });


//     //********************************************Main categories********************************** */

//     Route::group(['prefix' => 'main-categories'], function () {
//         Route::get('/', 'MainCategoriesController@index')->name('admin.maincategories');
//         Route::get('/create', 'MainCategoriesController@create')->name('admin.maincategories.create');
//         Route::post('/store', 'MainCategoriesController@store')->name('admin.maincategories.store');
//         Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.maincategories.edit');
//         Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.maincategories.update');
//         Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.maincategories.delete');
//         Route::get('changeStatus/{id}', 'MainCategoriesController@changeStatus')->name('admin.maincategories.status');
//     });

//     ######################### End  Main categories Routes  ########################



//     ######################### Begin vendors Routes ########################
//     Route::group(['prefix' => 'vendors'], function () {
//         Route::get('/', 'VendorsController@index')->name('admin.vendors');
//         Route::get('create', 'VendorsController@create')->name('admin.vendors.create');
//         Route::post('store', 'VendorsController@store')->name('admin.vendors.store');
//         Route::get('edit/{id}', 'VendorsController@edit')->name('admin.vendors.edit');
//         Route::post('update/{id}', 'VendorsController@update')->name('admin.vendors.update');
//         Route::get('delete/{id}', 'VendorsController@destroy')->name('admin.vendors.delete');
//         Route::get('changeStatus/{id}', 'VendorsController@changeStatus')->name('admin.vendors.status');
//     });
//     ######################### End  vendors Routes  ########################

//     ######################### Begin SubCategories Routes ########################
//     Route::group(['prefix' => 'sub-categories'], function () {
//         Route::get('/', 'SubCategoryController@index')->name('admin.subcategories');
//         Route::get('create', 'SubCategoryController@create')->name('admin.subcategories.create');
//         Route::post('store', 'SubCategoryController@store')->name('admin.subcategories.store');
//         Route::get('edit/{id}', 'SubCategoryController@edit')->name('admin.subcategories.edit');
//         Route::post('update/{id}', 'SubCategoryController@update')->name('admin.subcategories.update');
//         Route::get('delete/{id}', 'SubCategoryController@destroy')->name('admin.subcategories.delete');
//         Route::get('changeStatus/{id}', 'SubCategoryController@changeStatus')->name('admin.subcategories.status');
//     });

//     ######################### End SubCategories Routes ########################
// });




// Route::get('login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
// Route::post('login', 'Auth\LoginController@adminLogin')->name('admin.login');

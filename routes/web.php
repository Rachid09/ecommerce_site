<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\MainCategory;



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


Auth::routes();

define('PAGINATION_COUNT', 5);
Route::get('/about-us', function () {
    $categories = MainCategory::selection()->active()->get();


    $title = 'Qui sommes nous';
    return view('client.aboutUs', compact('categories', 'title'));
})->name('about-us');
Route::get('/contact', function () {
    $categories = MainCategory::selection()->active()->get();

    $title = 'Contactez nous';
    return view('client.contactUs', compact('categories', 'title'));
})->name('contact');

################## CLIENT ROUTES ################################
Route::group(['prefix' => 'client', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showClientLoginForm')->name('client.login');
    Route::post('login', 'LoginController@clientLogin')->name('client.login');
    Route::get('register', 'RegisterController@showClientRegisterForm')->name('client.register');
    Route::post('register', 'RegisterController@ClientRegister')->name('client.register');
});


Route::group(['namespace' => 'client'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@index')->name('client.profile');
    Route::post('/profile/update/{id}', 'ProfileController@update')->name('client.profile.update');
    ####################### Product routes ############################

    Route::get('/all-products', 'ProductsController@index')->name('shop.all-products');
    Route::get('/categories/{name}/{id}', 'ProductsController@categoryProducts')->name('shop.categoryProducts');
    Route::get('/product/{name}/{id}', 'ProductsController@productDetails')->name('shop.productDetails');





    ###################### Cart Routes ############################

    Route::get('/shopping-cart', 'CartController@index')->name('shopping-cart');
    Route::post('/shopping-cart/ajouter', 'CartController@store')->name('shopping-cart.add');
    Route::post('/shopping-cart/update/{id}', 'CartController@update')->name('shopping-cart.update');
    Route::get('/shopping-cart/delete/{id}', 'CartController@destroy')->name('shopping-cart.delete');





    ########################### CHECKOUT CONTROLLER ######################################
    Route::get('/paiement', 'CheckoutController@index')->name('checkout');
    Route::post('/paiement', 'CheckoutController@checkout')->name('checkout');
    Route::get('/thank-you', 'CheckoutController@orderThanks')->name('order.thanksPage');
});




########################## begin admin routes###########################################

//******************************************LANGUAGES***************************************
Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::prefix('profile')->group(function () {

        Route::get('/profile/edit/{id}', 'ProfileController@edit')->name('admin.profile.edit');
        Route::get('/profile/update/{id}', 'ProfileController@update')->name('admin.profile.update');
    });
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
        Route::post('delete/{id}', 'MainCategoriesController@destroy')->name('admin.maincategories.delete');
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
        Route::post('delete/{id}', 'SellersController@destroy')->name('admin.sellers.delete');
        Route::post('changeStatus/{id}', 'SellersController@changeStatus')->name('admin.sellers.status');
    });
    ######################### End  sellers Routes  ########################

    ######################### Begin SubCategories Routes ########################
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', 'ClientController@index')->name('admin.clients');
        Route::get('edit/{id}', 'ClientController@edit')->name('admin.clients.edit');
        Route::post('update/{id}', 'ClientController@update')->name('admin.clients.update');
        Route::get('delete/{id}', 'ClientController@destroy')->name('admin.clients.delete');
    });

    ######################### End SubCategories Routes ########################


    ######################### End Products Routes ########################

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', 'ProductsController@index')->name('admin.products');
        Route::get('delete/{id}', 'ProductsController@destroy')->name('admin.products.delete');
        Route::post('changeStatus/{id}', 'ProductsController@changeStatus')->name('admin.products.status');
        Route::get('makeFeatured/{id}', 'ProductsController@changeFeatured')->name('admin.products.featured');
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showAdminLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@adminLogin')->name('admin.login');
});




######################### brgin seller Routes ########################

Route::group(['prefix' => 'seller', 'namespace' => 'seller', 'middleware' => 'auth:seller'], function () {
    Route::get('/home', 'DashboardController@index')->name('seller.dashboard');
    ######################### brgin STOCK Routes ########################
    Route::group(['prefix' => 'stock'], function () {
        Route::get('/', 'ProductController@index')->name('seller.stock.products');
        Route::get('/add', 'ProductController@create')->name('seller.stock.product.create');
        Route::post('/store', 'ProductController@store')->name('seller.stock.product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('seller.stock.product.edit');
        Route::post('/update/{id}', 'ProductController@update')->name('seller.stock.product.update');
        Route::post('delete/{id}', 'ProductController@destroy')->name('seller.stock.product.delete');
        Route::post('changeStatus/{id}', 'ProductController@changeStatus')->name('seller.stock.product.status');
        Route::get('addImages/{id}', 'ProductController@getFormAddImages')->name('seller.stock.product.images');
        Route::post('addImages/{id}', 'ProductController@addImages')->name('seller.stock.product.storeImages');
        Route::get('/{prod_id}/changeImageStatus/{id}', 'ProductController@changeImageStatus')->name('seller.stock.product.changeImageStatus');
        Route::get('/{prod_id}/deleteImage/{id}', 'ProductController@destroyImage')->name('seller.stock.product.deleteImage');
    });

    ######################### brgin store Routes ########################
    Route::group(['prefix' => 'store'], function () {
        Route::get('/', 'StoreController@index')->name('seller.store.products');
        // Route::get('/add', 'StoreController@create')->name('seller.store.create');
        // Route::post('/store', 'StoreController@store')->name('seller.store.store');
        Route::get('/edit/{id}', 'StoreController@edit')->name('seller.store.product.edit');
        Route::post('/update/{id}', 'StoreController@update')->name('seller.store.product.update');
        Route::post('delete/{id}', 'StoreController@changeStatus')->name('seller.store.product.status');
    });

    ######################### brgin orders Routes ########################
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', 'OrderController@index')->name('seller.orders');
        Route::get('/add', 'OrderController@create')->name('seller.orders.create');
        Route::post('/store', 'OrderController@store')->name('seller.orders.store');
        // Route::get('/orderDetails/{id}', 'OrderController@show')->name('seller.orders.details');
        Route::post('/update/{id}', 'OrderController@update')->name('seller.orders.update');
        Route::get('delete/{id}', 'OrderController@destroy')->name('seller.orders.delete');
        Route::get('changeStatus/{id}', 'OrderController@changeStatus')->name('seller.orders.status');
    });
});



Route::group(['prefix' => 'seller', 'namespace' => 'Auth', 'middleware' => 'guest:seller'], function () {
    Route::get('login', 'LoginController@showsellerLoginForm')->name('seller.login');
    Route::post('login', 'LoginController@sellerLogin')->name('seller.login');
    Route::get('register', 'RegisterController@showSellerRegisterForm')->name('seller.register');
    Route::post('register', 'RegisterController@sellerRegister')->name('seller.register');
    // Route::post('logout', 'LoginController@logout')->name('seller.logout');
});

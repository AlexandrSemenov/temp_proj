<?php

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

Route::get('/main', ['uses' => 'MainController@index', 'as' => 'main.index']);
Route::get('/main/meals-list', ['uses' => 'MainController@meals_list', 'as' => 'main.meal']);
Route::get('/main/meals-list-json/{menu_id}/{day_id}', ['uses' => 'MainController@meals_list_json', 'as' => 'main.json']);
Route::get('/main/first-menu-json', ['uses' => 'MainController@first_menu_json', 'as' => 'main.menu.first']);
Route::get('/main/days-list-json', ['uses' => 'MainController@days_list_json', 'as' => 'main.days']);

Route::get('/main/start-menu-json', ['uses' => 'MainController@start_menu_json', 'as' => 'menu.start']);
Route::get('/main/select-menu-json/{id}', ['uses' => 'MainController@select_menu_json', 'as' => 'menu.select']);

Route::get('/cart', ['uses' => 'CartController@index', 'as' => 'cart.index']);
Route::get('/cart/create/', ['uses' => 'CartController@create', 'as' => 'cart.create']);
Route::get('/cart/add/', ['uses' => 'CartController@add', 'as' => 'cart.add']);


Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register-checkout', ['uses' => 'Auth\RegisterCheckoutController@register', 'as' => 'register-checkout']);

/* Checkout routes */
Route::get('/checkout', 'CheckoutController@index');

/* Profile routes */
Route::get('/profile', ['uses' => 'ProfileController@index', 'as' => 'profile.index', 'middleware' => 'auth']);
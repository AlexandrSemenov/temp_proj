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
Route::get('/main/meals-list-json', ['uses' => 'MainController@meals_list_json', 'as' => 'main.json']);
Route::get('/main/meals-list-json2', ['uses' => 'MainController@meals_list_json2', 'as' => 'main.json']);


Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register-checkout', ['uses' => 'Auth\RegisterCheckoutController@register', 'as' => 'register-checkout']);

/* Checkout routes */
Route::get('/checkout', 'CheckoutController@index');
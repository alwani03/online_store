<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id?}', 'DetailController@index')->name('details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-products');
Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-products-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-products-details');


Route::get('/dashboard/transactions', 'DashboardTransactionsController@index')->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionsController@details')->name('dashboard-transactions-details');









Auth::routes();
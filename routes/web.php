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

Route::get('/','WelcomeController@welcome');
Route::get('admin','WelcomeController@admin');
Route::get('login1','WelcomeController@login');
Route::get('register1','WelcomeController@register');
Route::get('add_book','WelcomeController@add_book');
Route::get('logout','logoutController@logout');
Route::get('book_list','WelcomeController@book_list');

//Insert book
Route::post('save','WelcomeController@save');
Route::get('delete','WelcomeController@delete');
Route::get('edit','WelcomeController@edit');

//searching
Route::post('search','SearchController@search');
Route::get('search','SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//add-to-cart
Route::get('/add-to-cart/{book_id}','AddToCartController@addToCart')->name('addToCart');

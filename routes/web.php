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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/signup', 'Auth\RegisterController@register');
Route::get('/category', 'Controller@category')->name('category');
Route::get('/signout', 'Auth\LoginController@logout')->name('logout');
Route::post('/kosarba/{termek}','CartController@add')->name('cart.add');
Route::get('/kosar','CartController@index')->name('cart.index');
Route::get('/kosar-urites','CartController@clear')->name('cart.clear');
Route::get('/termekek','ProductController@list_all');
Route::get('/termekek/{kat_id}','ProductController@list');
Route::get('/veglegesites','ProductFinalController@final')->name('final');;
Route::get('/kosar-sor/{sor}','CartController@remove')->name('cart.sorclear');
Route::get('/leadas','VeglegesitesController@finally')->name('cart.finally');

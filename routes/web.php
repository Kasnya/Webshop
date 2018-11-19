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
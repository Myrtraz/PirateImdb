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
	return redirect()->to('/movie');
});

Route::get('/movie/search', 'MovieController@search');
Route::resource('/movie', 'MovieController');

Route::get('/login', 'LoginController@user');
Route::get('/admin', 'LoginController@admin');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::post('/registro', 'RegisterController@create')->name('registro');
Route::get('/registro', 'RegisterController@index');


Route::resource('/admin', 'AdminController');
//Route::get('/admin/', 'AdminController@createCategory');
//Route::get('/admin', 'LoginController@logout');

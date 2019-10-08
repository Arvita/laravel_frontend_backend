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


Auth::routes();
Route::group(['middleware' => ['web','auth']], function () {
	Route::get('/','Admin\DashboardController@index');
	Route::get('/home', 'Admin\DashboardController@index')->name('home');
	Route::get('/404','Admin\DashboardController@show_404');
	Route::get('logout', 'Auth\LoginController@logout');

	 Route::post('/user/data', 'Admin\UserController@data');
    Route::get('/user/{kode}/conf', 'Admin\UserController@confirm');
    Route::resource('/user', 'Admin\UserController');

});
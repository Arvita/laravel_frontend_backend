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
	Route::get('/admin','Backend\DashboardController@index');
	Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
	Route::get('/404','Backend\DashboardController@show_404');
	Route::get('logout', 'Auth\LoginController@logout');

	Route::post('/user/data', 'Backend\UserController@data');
    Route::get('/user/{kode}/conf', 'Backend\UserController@confirm');
    Route::resource('/user', 'Backend\UserController');

});

Route::get('/', 'Frontend\HomeController@index')->name('home');

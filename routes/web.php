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


// Admin Routes
Route::group(['namespace' => 'Admin'], function(){

	// Admin Auth Routes
	Route::get('admin', 'Auth\LoginController@index')->name('admin.login');
	Route::post('admin', 'Auth\LoginController@login');
	
	// Dashboard Routes
	Route::get('admin/dashboard','DashboardController@index')->name('admin.dashboard');

});


// User Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

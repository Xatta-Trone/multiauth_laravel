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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function(){
	//Admin Login
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/login','Auth\LoginController@showLoginForm')->name('admin.showLoginForm');
	Route::post('/login','Auth\LoginController@login')->name('admin.login');
	Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');
	Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('admin.password.update');
	Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');



});

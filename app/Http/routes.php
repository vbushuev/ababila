<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Main pages
Route::match(['get','post'],'/','WebController@welcome');
// QA
Route::get('test/db/{id}','TestController@index');

// Authentication routes...
Route::match(['get','post'],'auth/login', 'Auth\AuthController@Login');
Route::match(['get','post'],'auth/logout', 'Auth\AuthController@Logout');

// Registration routes...
Route::match(['get','post'],'auth/register', 'Auth\AuthController@Register');

// Password reset link request routes...
Route::match(['get','post'],'password/email', 'Auth\PasswordController@Email');

// Password reset routes...
Route::match(['get','post'],'password/reset/{token}', 'Auth\PasswordController@getReset');

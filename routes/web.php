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

Route::get('auth', ['as' => 'auth', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
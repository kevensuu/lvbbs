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

Route::get('/', 'Www\HomeController@show')->name('home');

Route::get('/ucenter/{id}.html', 'Www\UsersController@center')->name('ucenter')->where(['id' => '[0-9]+']);

Route::get('/topics/node-{id}.html', 'Www\TopicsController@nodes')->name('topics.list')->where(['id' => '[0-9]+']);
Route::get('/topics/{id}.html', 'Www\TopicsController@detail')->name('topics.detail')->where(['id' => '[0-9]+']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

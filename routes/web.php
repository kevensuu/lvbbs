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

Route::get('/newest.html', 'Www\TopicsController@newest')->name('topics.newest');
Route::get('/newest-{page}.html', 'Www\TopicsController@newest')->name('topics.newest.page')->where(['page' => '[0-9]+']);

Route::get('/nodes/{id}.html', 'Www\TopicsController@nodes')->name('topics.list')->where(['id' => '[0-9]+']);
Route::get('/nodes/{id}-{$page}.html', 'Www\TopicsController@nodes')->name('topics.list.page')->where(['id' => '[0-9]+','page' => '[0-9]+']);

Route::get('/topics/{id}.html', 'Www\TopicsController@detail')->name('topics.detail')->where(['id' => '[0-9]+']);
Route::get('/topics/{id}-{$page}.html', 'Www\TopicsController@detail')->name('topics.detail.page')->where(['id' => '[0-9]+','page' => '[0-9]+']);
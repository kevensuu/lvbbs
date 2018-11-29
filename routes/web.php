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

Route::get('/recommend.html', 'Www\TopicsController@recommend')->name('topics.recommend');
Route::get('/recommend-{page}.html', 'Www\TopicsController@recommend')->name('topics.recommend.page')->where(['page' => '[0-9]+']);

Route::get('/excellent.html', 'Www\TopicsController@excellent')->name('topics.excellent');
Route::get('/excellent-{page}.html', 'Www\TopicsController@excellent')->name('topics.excellent.page')->where(['page' => '[0-9]+']);

Route::get('/no_reply.html', 'Www\TopicsController@noReply')->name('topics.no_reply');
Route::get('/no_reply-{page}.html', 'Www\TopicsController@noReply')->name('topics.no_reply.page')->where(['page' => '[0-9]+']);

Route::get('/last_reply.html', 'Www\TopicsController@lastReply')->name('topics.last_reply');
Route::get('/last_reply-{page}.html', 'Www\TopicsController@lastReply')->name('topics.last_reply.page')->where(['page' => '[0-9]+']);

Route::get('/newest.html', 'Www\TopicsController@newest')->name('topics.newest');
Route::get('/newest-{page}.html', 'Www\TopicsController@newest')->name('topics.newest.page')->where(['page' => '[0-9]+']);

Route::get('/nodes/{id}.html', 'Www\TopicsController@nodes')->name('topics.nodes')->where(['id' => '[0-9]+']);
Route::get('/nodes/{id}-{page}.html', 'Www\TopicsController@nodes')->name('topics.nodes.page')->where(['id' => '[0-9]+','page' => '[0-9]+']);

Route::get('/topics/{id}.html', 'Www\TopicsController@detail')->name('topics.detail')->where(['id' => '[0-9]+']);
Route::get('/topics/{id}-{page}.html', 'Www\TopicsController@detail')->name('topics.detail.page')->where(['id' => '[0-9]+','page' => '[0-9]+']);
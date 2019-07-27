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

Route::resource('posts', 'PostsController');

Route::resource('comments', 'CommentsController', ['only' => ['store', 'destroy']]);

Route::get('/', 'PostsController@index');

Route::get('/feed', 'HomeController@feed');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::group(['middleware' => 'auth'], function() {

});

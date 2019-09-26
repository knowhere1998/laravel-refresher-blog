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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::resource('posts', 'PostsController');

Route::resource('comments', 'CommentsController', ['only' => ['store', 'destroy']]);

Route::get('/', 'PostsController@index')->name('home');

Route::get('/feed', 'HomeController@feed')->name('feed');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact-us');

Route::resource('newsletter-subscriptions', 'NewsletterSubscriptionsController', ['only' => ['store']]);

Route::group(['middleware' => 'auth'], function() {
	Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);
});

Route::get('newsletter-subscriptions/unsubscribe', 'NewsletterSubscriptionsController@unsubscribe')->name('newsletter-subscriptions.unsubscribe');


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


Route::get('/feed', function () {
	return view('feed')->with([
		'notifications' => [],
		'blogs' => [
			'First Blog',
			'Another Blog'
		]
	]);
});


Route::get('/blog', function () {
	$blogs = [
		'First Blog',
		'Another Blog'
	];
	return view('blog')->withBlogs($blogs);
});

Route::get('/about', function () {
	return view('about');
});


Route::get('/contact', function () {
	return view('contact');
});


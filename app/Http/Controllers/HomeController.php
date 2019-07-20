<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function feed(){

		return view('feed')->with([
			'notifications' => [],
			'blogs' => [
				'First Blog',
				'Another Blog'
			]
		]);
	}

	function blog(){
		$blogs = [
			'First Blog',
			'Another Blog'
		];
		return view('blog')->withBlogs($blogs);
	}

	function about(){
		return view('about');
	}

	function contact() {
		return view('contact');
	}
}

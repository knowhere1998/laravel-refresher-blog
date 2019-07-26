<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller {
//	/**
//	 * Create a new controller instance.
//	 *
//	 * @return void
//	 */
//	public function __construct()
//	{
//		$this->middleware('auth');
//	}
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$posts = Post::orderBy('id', 'desc')->take(5)->get();
		return view('welcome', ['posts' => $posts]);
	}

	public function feed(){

		return view('feed')->with([
			'categories' => Category::all(),
			'blogs' => Post::all()
		]);
	}

	function about(){
		return view('about');
	}

	function contact() {
		return view('contact');
	}
}

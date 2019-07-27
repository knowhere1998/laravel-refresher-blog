<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller {

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

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
		$blogs = Post::all();
		return view('blog')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
		if (Auth::check()){
			$user = Auth::user();
			$post = new Post($request->all());
			$post->author_id= $user->getAuthIdentifier();
			$post->save();
			dd($post);
		}else{
			dd("Log in before posting on this blog");
		}
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
		return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {
		if (Auth::check()){
			$user = Auth::user();
			if ($user->getAuthIdentifier() === $post->author_id){
				$post->title = $request['title'];
				$post->content = $request['content'];
				$post->save();
			}else{

				return "Unable to process request";
			}
			return view('posts.show', ['post' => $post]);
		}else{
			dd("Log in before posting on this blog");
		}
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Post $post
	 * @return \Illuminate\Http\Response
	 * @throws \Exception
	 */
    public function destroy(Post $post) {
        $post->delete();
        return redirect('/posts');
    }
}

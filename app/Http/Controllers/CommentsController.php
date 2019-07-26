<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Auth;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(CommentsRequest $request) {
		$user = Auth::user();
		$post = Post::findOrFail($request->input('post_id'));

		$comment = $user->comments()->create([
			'post_id' => $post->id,
			'content' => $request->input('content')
		]);

		dd($comment);
		return redirect()->route('posts.show', $post)->with('success', trans('comments.created'));
    }

//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param Comment $comment
//     * @return Response
//     */
//    public function edit(Comment $comment) {
//        //
//    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return Response
     */
    public function destroy(Comment $comment) {
        //
    }
}

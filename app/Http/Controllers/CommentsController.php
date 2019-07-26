<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller {

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
		$user = Auth::user();
		$post = Post::findOrFail($request->input('post_id'));
		$comment = $post->comments()->create([
			'author_id' => $user->id,
			'content' => $request->input('content')
		]);

		return redirect()->route('posts.show', $post)->with('success', "Comments.created");
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
    public function destroy(Comment $id) {
		$comment = Post::findOrFail($id);
		$post = $comment->post();
		$comment->delete();
		return redirect()->route('posts.show', $post)->with('success', "comment deleted");
	}
}

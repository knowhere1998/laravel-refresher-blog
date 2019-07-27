<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsersRequest;
use App\User;
use Illuminate\View\View;

class UsersController extends Controller
{
	/**
	 * Display the specified resource.
	 * @param User $user
	 * @return View
	 */
	public function show(User $user) {
		$posts = $user->posts()->orderBy('created_at', 'desc')->limit(10)->get();
		$comments = $user->comments()->orderBy('created_at', 'desc')->limit(10)->get();
		return view('users.show')->withUser($user)->withPosts($posts)->withComments($comments);
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param User $user
	 * @return
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function edit(User $user) {
		$this->authorize('update', $user);
		return view('users.edit', $user)->withUser($user);
	}
}

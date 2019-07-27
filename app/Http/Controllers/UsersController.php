<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsersRequest;
use App\User;
use Illuminate\View\View;

class UsersController extends Controller {
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
	 * @throws AuthorizationException
	 */
	public function edit(User $user) {
		$this->authorize('update', $user);
		return view('users.edit', $user)->withUser($user);
	}


	/**
	 * Update the specified resource in storage.
	 * @param UsersRequest $request
	 * @param User $user
	 * @return
	 * @throws AuthorizationException
	 */
	public function update(UsersRequest $request, User $user) {
		$this->authorize('update', $user);
		$user = Auth::user();
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		if ( $request->input('password') != '') {
			$user->password = bcrypt($request->input('password'));
		}
		$user->save();
		return redirect()->route('users.show', $user)->withSuccess( "Profile Updated!");
	}
}

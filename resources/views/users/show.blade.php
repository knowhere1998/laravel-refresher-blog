@extends('layouts.app')

@section('content')
	<div class="col-md-8 offset-md-2 pt-5">
		<div class="card card-default">
			<div class="card-header justify-content-center">
				<strong>{{ user_name($user) }}</strong>
			</div>
			<div class="card-body">
				@include ('users.profile')
			</div>
		</div>

		<ul class="nav nav-tabs">
			<li class="nav-item active">
				<a class="nav-link" data-toggle="pill" href="#posts">Recent posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="pill" href="#comments">Recent Comments</a>
			</li>
		</ul>

		<div class="tab-content">
			<div id="posts" class="tab-pane active">
				@each('posts.user._show', $posts, 'post')
			</div>
			<div id="comments" class="tab-pane">
				@each('comments.user._show', $comments, 'comment')
			</div>
		</div>
	</div>
@endsection

@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">

			@if (Session::has('success'))
				<div class="alert alert-success alert-dismissible w-100" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					{{ Session::get('success') }}
				</div>
			@endif

			<div class="col-md-10 offset-md-1">
				<div class="container clearfix">
					<h1>
					{{ $post->title }}
					</h1>
					<p class="float-right">
						Posted By: <a href="/about" class="font-weight-bold">{{ user_name($post->author) }}</a>
						on <i>{{  humanize_date($post->created_at) }}</i>
					</p>
				</div>
				<hr />
				<p>
					{{ $post->content }}
				</p>
				<hr>
				<div class="comments">
					@include ('comments._list')
				</div>
				<a href="/posts/{{ $post->id }}/edit">Edit</a>
			</div>
		</div>
	</div>
@endsection

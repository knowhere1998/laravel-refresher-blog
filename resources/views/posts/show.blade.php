@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="container clearfix">
					<h1>
					{{ $post->title }}
					</h1>
					<p class="float-right">
						Posted By: <a href="/about" class="font-weight-bold">{{ $post->author->name }}</a>
						on <i>{{ date('F d, Y', strtotime($post->created_at)) }}</i>
					</p>
				</div>
				<hr />
				<p>
					{{ $post->content }}
				</p>
				<a href="/posts/{{ $post->id }}/edit">Edit</a>
			</div>
		</div>
	</div>
@endsection

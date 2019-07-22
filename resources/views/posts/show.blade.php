@extends('layouts.app')
@section('content')

	<div class="title m-b-md">
		{{ $post->title }}
	</div>
	<p>
	Posted By: {{ $post->author->name }} on {{ date('F d, Y', strtotime($post->created_at)) }}

</p>
	<hr />
	<p>
		{{ $post->content }}
	</p>
	<a href="/posts/{{ $post->id }}/edit">Edit</a>
	<hr />
@endsection

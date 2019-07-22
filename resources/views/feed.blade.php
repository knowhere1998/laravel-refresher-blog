@extends('layouts.app')
@section('content')

	<div class="title m-b-md">
		Blog Feed
	</div>

	@if (count($categories))
		<ul class="list-inline">
			@foreach($categories as $category)
				<li><a href="#">{{ $category->name }}</a></li>
			@endforeach
		</ul>
	@else
		<p>No new Notifications</p>
	@endif
	<hr />


	@if (count($blogs))
		<div class="font-weight-bold">
			Recent Blog Posts
		</div>
		<ul>
			@foreach($blogs as $blog)
				<li><a href="{{ url("blog", $blog->id) }}">{{ $blog->title }}</a></li>
			@endforeach
		</ul>
	@else
		<p>No Blog Entries</p>
	@endif
	<hr />
@endsection

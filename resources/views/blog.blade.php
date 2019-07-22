@extends('layouts.app')
@section('content')

	<div class="title m-b-md">
		Blog Landing Page
	</div>

	@if ($blogs)
	    <ul>
			@foreach($blogs as $blog)
				<li>
					<a href="/posts/{{ $blog->id }}/">
						{{ $blog->title }}
					</a>
				</li>
			@endforeach
		</ul>
	@else
		<p>No Blog Entries</p>
	@endif
	<hr />
@endsection

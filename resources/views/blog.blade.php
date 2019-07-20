@extends('layout')
@section('content')

	<div class="title m-b-md">
		Blog Landing Page
	</div>

	@if ($blogs)
	    <ul>
			@foreach($blogs as $blog)
				<li>{{ $blog }}</li>
			@endforeach
		</ul>
	@else
		<p>No Blog Entries</p>
	@endif
	<hr />
@endsection

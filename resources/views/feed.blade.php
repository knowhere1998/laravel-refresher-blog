@extends('layouts.app')
@section('content')

	<div class="title m-b-md">
		Blog Feed
	</div>

	@if ($notifications)
		<ul>
			@foreach($notifications as $notification)
				<li>{{ $notification }}</li>
			@endforeach
		</ul>
	@else
		<p>No new Notifications</p>
	@endif
	<hr />


	@if ($blogs)
		<div class="font-weight-bold">
			Recent Blog Posts
		</div>
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

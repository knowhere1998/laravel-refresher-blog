@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>
					Laravel 5.8 Blog
				</h1>
				@if ($posts)
					<ul>
						@foreach($posts as $post)
							<li>
								<a href="/posts/{{ $post->id }}/">
									{{ $post->title }}
								</a>
							</li>
						@endforeach
					</ul>
				@else
					<p>No Blog Entries</p>
				@endif
			</div>
		</div>
	</div>

@endsection

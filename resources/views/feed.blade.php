@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>
					Blog Feed
				</h1>
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
			</div>
		</div>
	</div>

@endsection

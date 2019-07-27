@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1>
					Popular Blog Posts
				</h1>
				@if ($posts->count())
					<div class="p-5">
					@foreach($posts as $post)
						<div class="card">
							<div class="card-body border border-success">
								<div>
									<span class="float-right">
										<span class="font-italic">
											Posted on:
										</span>
										<span class="font-weight-bold">
											{{ $post->created_at }}
										</span>
									</span>
									<div class="font-weight-bold h3">
										{{ $post->title }}
									</div>
								</div>
								<span class="float-right h5">
									<a class="card-link" href="{{ url('posts', $post->id) }}">
										Read More
									</a>
								</span>
							</div>
						</div>
					@endforeach
					</div>
				<div class="d-flex justify-content-center">

					{{ $posts->links() }}
				</div>
				@else
					<div class="h4 p-5">
						No Blog Entries yet. <br>

						<a href="{{ route('posts.create') }}">Click Here</a> to add some.

					</div>
				@endif
			</div>
		</div>
	</div>

@endsection

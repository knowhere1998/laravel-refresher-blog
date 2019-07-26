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
					<h1 class="float-left">
					{{ $post->title }}
					</h1>
					<div class="meta-info">
						<p class="float-right">
							Posted By: <a href="/about" class="font-weight-bold">{{ user_name($post->author) }}</a>
							on <i>{{  humanize_date($post->created_at) }}</i>
						</p>
					</div>
					<br>
					<br>
					<div class="justify-content-end float-right">
						<a href="/posts/{{ $post->id }}/edit"><i class="fa fa-edit"> Edit </i></a>
					</div>
				</div>
				<hr />
				<p>
					{{ $post->content }}
				</p>
				<hr>
				<div class="container">
					@include ('comments._list')
				</div>
			</div>
		</div>
	</div>
@endsection

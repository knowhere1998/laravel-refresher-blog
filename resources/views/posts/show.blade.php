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
					<br>
					<br>

					<div class="meta-info">
						<p class="float-right">
							Posted By: <a href="{{ route('users.show', $post->author ) }}" class="font-weight-bold">{{ user_name($post->author) }}</a>
							on <i>{{  humanize_date($post->created_at) }}</i>
						</p>
					</div>
				</div>
				@auth
				<div class="container clearfix">
					<div class="justify-content-end float-right">
						{!! Form::model($post, ['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'class' => 'delete-post-confirmation']) !!}
						<button type="submit" class="btn btn-sm btn-link">
							<i class="text-danger fa fa-window-close" style="font-size: 16px"> Delete</i>
						</button>
						{!! Form::close() !!}
					</div>
					<div class="justify-content-end float-right">
						{!! Form::model($post, ['method' => 'GET', 'route' => ['posts.edit', $post->id]]) !!}
						<button type="submit" class="btn btn-sm btn-link">
							<i class="fa fa-edit" style="font-size: 16px"> Edit</i>
						</button>
						{!! Form::close() !!}
					</div>
				</div>
				@endauth
				<hr />
				<div class="p">
					{{ $post->content }}
				</div>
				<hr>
				<div class="container">
					@include ('comments._list')
				</div>
			</div>
		</div>
	</div>
@endsection


@push('inline-scripts')
	@include ('js.forms.delete-post-confirmation', ['text' => 'Delete this BlogPost?'])
@endpush

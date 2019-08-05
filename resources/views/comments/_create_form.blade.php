<div class="card card-default">
	<div class="card-heading font-weight-bold p-2">Add Comment</div>
	<div class="card-body">
		{!! Form::open(['route' => 'comments.store', 'method' => 'post']) !!}
		{!! Form::hidden('post_id', $post->id) !!}
		<div class="form-group">
			{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => "Enter your comment Here", 'rows' => '4']) !!}
		</div>
		@auth
			{!! Form::submit("Post Comment", ['class' => 'btn btn-primary pull-right']) !!}
		@else
			{!! Form::submit("Post Comment", ['class' => 'btn btn-primary pull-right disabled', 'disabled']) !!}
		@endauth
		{!! Form::close() !!}
	</div>
</div>

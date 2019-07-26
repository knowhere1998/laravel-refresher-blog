<div class="card card-default">
	<div class="card-heading">
		<span>{{ user_name($comment->author) }}</span>

		<span class="pull-right">
          <time>{{ humanize_date($comment->created_at) }}</time>

        	@can('delete', $comment)
				{!! Form::model($comment, ['method' => 'DELETE', 'route' => ['comments.destroy', $comment->id], 'class' => 'form-inline delete-confirmation']) !!}
				<button type="submit" class="btn btn-link">
                <span class="text-danger glyphicon glyphicon-remove" aria-hidden="true"><i class="fa fa-window-close" aria-hidden="true"></i></span>
              </button>
				{!! Form::close() !!}
			@endcan
        </span>
	</div>
	<div class="card-body">
		{{ $comment->content }}
	</div>
</div>

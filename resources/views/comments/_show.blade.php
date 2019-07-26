<div class="card card-default">
	<div class="card-heading p-3">
		<span>Posted by: {{ user_name($comment->author) }}</span>

		<span class="float-right">
			Posted at: <time>{{ humanize_date($comment->created_at) }}</time>
        </span>
	</div>
	<div class="card-body">
		<div class="d-flex justify-content-center">
			<div class="font-weight-bolder pl-3 w-100">
				{{ $comment->content }}
			</div>
			@can('delete', $comment)
				<div class="float-right">
					{!! Form::model($comment, ['method' => 'DELETE', 'route' => ['comments.destroy', $comment->id], 'class' => 'form-inline delete-confirmation']) !!}
					<button type="submit" class="btn btn-link">
						<span class="text-danger fa fa-window-close" style="font-size: 24px"></span>
					</button>
					{!! Form::close() !!}
				</div>
			@endcan
		</div>
	</div>
</div>

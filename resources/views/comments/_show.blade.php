<div class="card card-default">
	<div class="card-heading">
		<span>{{ user_name($comment->author) }}</span>
		<time class="pull-right">{{ humanize_date($comment->created_at) }}</time>
	</div>
	<div class="card-body">
		{{ $comment->content }}
	</div>
</div>

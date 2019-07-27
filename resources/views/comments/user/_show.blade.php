<div class="card card-default">
	<div class="card-header">
		<b><a href="{{ route('posts.show', ['id' => $comment->post->id]) }}">{{ $comment->post->title }}</a></b>,
		<span>{{ user_name($comment->post->author) }}</span>
		<time class="float-right">{{ humanize_date($comment->created_at) }}</time>
	</div>
	<div class="card-body">
		{{ $comment->content }}
	</div>
</div>

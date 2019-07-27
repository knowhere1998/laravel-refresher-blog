<div class="card card-info">
	<div class="card-header">
		<b><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></b>,
		{{ $post->comments()->count() }} <span class="fa fa-comment" aria-hidden="true"></span>
		<time class="float-right">{{ humanize_date($post->created_at) }}</time>
	</div>
	<div class="card-body">
		{{ $post->content }}
	</div>
</div>

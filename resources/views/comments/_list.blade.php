<h2>Count:{{ $comments->total() }}</h2>

@each('comments/_show', $comments, 'comment')

<div class="text-center">
	{{ $comments->links() }}
</div>

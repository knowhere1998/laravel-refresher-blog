
<h4>
	Share Links: <ul>
		<li style="display: inline-block;">
			facebook
		</li>
		<li style="display: inline-block;">
			twitter
		</li>
		<li style="display: inline-block;">
			instagram
		</li>
	</ul>
</h4>

@include('comments._create_form')

<h5>Comments Count:{{ $comments->total() }}</h5>

@each('comments/_show', $comments, 'comment')

<div class="text-center">
	{{ $comments->links() }}
</div>

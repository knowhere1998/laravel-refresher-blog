
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

<div class="row">
	<div class="offset-md-1"></div>
	<div class="comments col-md-11">
		@include('comments._create_form')

		<div class="comments pt-2">
			@each('comments/_show', $comments, 'comment')
		</div>
	</div>
</div>
<div class="text-center">
	{{ $comments->links() }}
</div>


@push('inline-scripts')
	@include ('js.forms.delete-confirmation', ['text' => 'Delete this Comment?'])
@endpush

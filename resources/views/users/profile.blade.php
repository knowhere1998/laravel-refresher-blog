<form class="form-horizontal">
	<div class="row">
		<label class="control-label col-md-4" for="email">Name : </label>
		<div class="col-md-8">
			<span class="form-control-static">{{ $user->name }}</span>
		</div>
	</div>
	<div class="row">
		<label class="control-label col-md-4" for="email">Email : </label>
		<div class="col-md-8">
			<span class="form-control-static">{{ $user->email }}</span>
		</div>
	</div>
	<div class="row">
		<label class="control-label col-md-4" for="email">Post Count : </label>
		<div class="col-md-8">
			<span class="form-control-static">{{ $user->posts()->count() }}</span>
		</div>
	</div>
	<div class="row">
		<label class="control-label col-md-4" for="email">Comment Count : </label>
		<div class="col-md-8">
			<span class="form-control-static">{{ $user->comments()->count() }}</span>
		</div>
	</div>


	@can('update', $user)
		<a href="{{ route('users.edit', $user) }}" class="pull-right btn btn-primary">{{ trans('users.edit') }}</a>
	@endcan

</form>

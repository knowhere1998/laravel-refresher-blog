@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<h1 class="modal-title">Create new Post</h1>
		<div class="col-md-8 offset-md-2">
		<form method="POST" action="/posts">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title" >Post Title:</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Enter Post Title Here..">
			</div>
			<div class="form-group">
				<label for="content" >Post Content:</label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Enter Post Content Here.."></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
	</div>
@endsection

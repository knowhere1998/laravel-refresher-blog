@extends('layouts.app')

@section('content')
	<div class="col-md-8 offset-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ user_name($user) }}</strong>
			</div>
			<div class="panel-body">
				@include ('users.form')
			</div>
		</div>
	</div>
@endsection

{!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user]]) !!}

<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', "Confirm Password") !!}
	{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
</div>

<div class="float-right">
	<a href="{{ route('users.show', $user) }}" class="btn btn-default">{{ 'Cancel' }}</a>
	{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

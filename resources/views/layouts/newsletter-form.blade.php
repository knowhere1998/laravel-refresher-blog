<div class="container">
	{!! Form::open(['route' => 'newsletter-subscriptions.store', 'method' => 'post', 'class' => 'navbar-form navbar-right']) !!}
	<div class="form-row">
		<div class="col-md-4 offset-md-3">
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Enter your email address"]) !!}
		</div>
		<div class="col-md-2">
			{!! Form::submit("Subscribe to our newsletter", ['class' => 'btn btn-primary']) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>

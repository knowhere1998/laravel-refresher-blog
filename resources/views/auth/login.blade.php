@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6" style="background-clip:border-box;">
			<div class="card card-default">
				<div class="card-header" style="text-align: center; font-weight: bolder; font-size: large">Login</div>
				<div class="card-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div>
								<input id="password" type="password" class="form-control" name="password" required>

								@if ($errors->has('password'))
									<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5" style="align-content: first">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8" style="padding-left: 20px">
								<button type="submit" class="btn btn-primary">
									Login
								</button>

								<a class="btn btn-link" href="{{ url('/password/reset') }}">
									Forgot Your Password?
								</a>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-5" style="align-content: first">
								<a href="{{ route('auth.provider', ['provider' => 'github']) }}" class="btn btn-default">
									Login with Github
									<i class="fa fa-github" aria-hidden="true"></i>
								</a>

								<a href="{{ route('auth.provider', ['provider' => 'facebook']) }}" class="btn btn-default">
									Login with Facebook
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>

								<a href="{{ route('auth.provider', ['provider' => 'google']) }}" class="btn btn-default">
									Login with Google
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

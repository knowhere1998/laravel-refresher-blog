<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">

	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
	<title>Laravel Blog</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
	<style>
		html, body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Nunito', sans-serif;
			font-weight: 200;
			height: 100vh;
			margin: 0;
		}

		.full-height {
			height: 80vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			width: 80%;
			text-align: center;
			margin: auto;
		}

		.title {
			font-size: 84px;
		}

		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 13px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		.bottom-links {
			position: relative;
			padding-top: 60px;
			bottom: 0px;
			text-align: center;
			width: 100%;
			height: 200px;
			background-color: #bbb; /*to make it visible*/
		}

		.bottom-links > a {
			color: #3f9ae5;
			text-shadow: #1d2124 3px;
			font-weight: bolder;
			font-size: 20px;
			padding: 0 90px;
		}

		.m-b-md {
			margin-bottom: 30px;
		}
	</style>
</head>
	<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
			<div class="top-right links">
				@auth
					@if (Request::path() !== "")
						<a href="/">Home</a>
					@endif
					@if (Request::path() !== "feed")
						<a href="/feed">Feed</a>
					@endif
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					<a href="#" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
				@else
					<a href="{{ route('login') }}">Login</a>
					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif
				@endauth
			</div>
		@endif
		<div class="content">

			@yield('content')

		</div>
	</div>
			<div class="bottom-links links">

				@if (Request::path() !== "blog")
					<a href="/blog">Blog</a>
				@endif
				@if (Request::path() !== "about")
					<a href="/about">About</a>
				@endif
				@if (Request::path() !== "contact")
					<a href="/contact">Contact Us</a>
				@endif
				<a href="https://github.com/knowhere1998/laravel-refresher-blog">GitHub</a>
			</div>
		</div>

	</body>
</html>

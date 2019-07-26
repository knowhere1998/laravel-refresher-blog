<!doctype html>
<html>
<head>
	@include('layouts.head')
</head>
<body class="h-100">
<div class="container-fluid" style="height: 100vh">
		@include('layouts.navbar')

	<div id="main" class="row h-75 p-1">

		@if (Session::has('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('success') }}
			</div>
		@endif

		@yield('content')

	</div>

	<footer class="row">
		@include('layouts.footer')
	</footer>

</div>
</body>
</html>

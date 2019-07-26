<!doctype html>
<html>
<head>
	@include('layouts.head')
</head>
<body class="h-100">
<div class="container-fluid" style="height: 100vh">
		@include('layouts.navbar')

	<div id="main" class="row mh-100">
		@yield('content')
	</div>

	<footer class="row">
		@include('layouts.footer')
	</footer>

</div>
</body>
</html>

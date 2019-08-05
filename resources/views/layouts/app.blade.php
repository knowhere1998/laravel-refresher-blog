<!doctype html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
<div class="page-container">
	<div class="content-wrap">

		<div class="container-fluid" style="height: 100vh">
				@include('layouts.navbar')

			<div id="main" class="row mh-100">
				@yield('content')
			</div>

		</div>
		<footer>
			<div id=footer>

				@include('layouts.footer')
			</div>
		</footer>
	</div>

</div>

</body>
</html>

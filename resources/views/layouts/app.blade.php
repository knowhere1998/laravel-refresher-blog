<!doctype html>
<html>
<head>
	@include('layouts.head')
</head>
<body class="d-flex flex-column">
<div class="page-container flex-fill">
	<div class="content-wrap">

		<div class="container-fluid" style="height: 100vh">
				@include('layouts.navbar')

			<div id="main" class="row mh-100">
				@yield('content')
			</div>

		</div>
		<div id="footer">
			@include('layouts.footer')
			@include('layouts.newsletter-form')
		</div>
	</div>

</div>

</body>
</html>

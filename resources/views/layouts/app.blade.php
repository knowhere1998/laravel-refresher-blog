<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts.head')
</head>
<body class="d-flex flex-column">
<div class="page-container flex-fill content">
	<div class="content-wrap">
		<div class="container-fluid">
				@include('layouts.navbar')

			<div id="main" class="row mh-100">
				@yield('content')
			</div>

		</div>
	</div>

</div>
@include('layouts.footer')

</body>
</html>

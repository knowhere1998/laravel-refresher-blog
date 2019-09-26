<div class="container-fluid" id="footer">
	<div class="bottom-links">
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
		<hr>

		@include('layouts.newsletter-form')
		<div id="copyright text-right">© 2019. All rights reserved.</div>
	</div>
</div>
<script href="{{ asset('js/app.js') }}" rel="stylesheet"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stack('inline-scripts')

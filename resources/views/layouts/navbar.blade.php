<div class="navbar navbar-expand-lg navbar-light">
	<nav class="navbar navbar-expand-lg navbar-light w-100">
		<a class="navbar-brand" href="/">
			<span class="navbar-brand mb-0 h1">
				Laravel Blog
			</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarSupportedContent">
			<ul class="navbar-nav navbar-left">
				@auth
					<li class="nav-item active">
						<a class="nav-link" href="/feed">Feed<span class="sr-only">(current)</span></a>
					</li>
				@endauth
				<li class="nav-item active">
					<a class="nav-link" href="/about">About</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/contact">Contact Me</a>
				</li>
			</ul>
			<ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
				@if (Route::has('login'))
					@if (!Auth::guest())
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{ Auth::user()->name }}
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								@if (Request::path() !== "/profile")
											<a class="dropdown-item"  href="{{ route('users.show', Auth::user()) }}">Profile</a>
										@endif
								@if (Request::path() !== "feed")
											<a class="dropdown-item"  href="/feed">Feed</a>
									@endif
								<div class="dropdown-divider"></div>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									<a class="dropdown-item"  href="#" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							</div>
						</li>
					@else
						<li class="nav-item active">
							<a class="dropdown-item"  href="{{ route('login') }}">Login</a>
						</li>

							@if (Route::has('register'))
								<li class="nav-item active">
									<a class="dropdown-item"  href="{{ route('register') }}">Register</a>
								</li>
							@endif
						@endif
				@endif
			</ul>

		</div>
	</nav>
</div>

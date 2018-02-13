<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	@include('partials.head')
	<body>
		<div id="app">
			<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						{{ config('app.name', 'Laravel') }}
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						@include('partials.left_navigation')
						@include('partials.right_navigation')
					</div>
				</div>
			</nav>
			<main class="py-4">
				@yield('content')
			</main>
		</div>
		@include('partials.javascript')
		@yield('scripts')
	</body>
</html>

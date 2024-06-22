<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shminke</title>
	<link rel="stylesheet" href="{{ asset('styles\reset.css') }}">
	<link rel="stylesheet" href="{{ asset('styles\styles.css') }}">
	@stack('styles')
</head>
<body>
<script type="text/javascript" src="{{ asset('/scripts/ckeditor/ckeditor.js') }}"></script>
@stack('scripts')


	<div class="page-container clearfix">
		<header class="side-container">
			<div class="header-tagline">
				<div class="header-wripper">
					<h1 class="site-title">
						admin zone
					</h1>
				</div>
			</div>
			<nav class="site-menu">
				<ul>
					<li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a href="{{ route('edit.index') }}">Home</a></li>
					<li class="{{ Route::currentRouteName() == 'photography' ? 'active' : '' }}"><a href="{{ route('photography') }}">Photography</a></li>
					<li class="{{ Route::currentRouteName() == 'edit.about' ? 'active' : '' }}"><a href="{{ route('edit.about') }}">About</a></li>
					<li class="{{ Route::currentRouteName() == 'edit.contact' ? 'active' : '' }}"><a href="{{ route('edit.contact') }}">Contact<a/></li>
				</ul>
			</nav>
			
		</header>

		<div class="main-container">
			<main class="content-container clearfix">

				<!--  Content block  -->
                    @section('content')
		
                    @show
				<!-- end content block -->

			</main>			
		</div>

	</div>
</body>
</html>
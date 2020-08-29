<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shminke</title>
	<link rel="stylesheet" href="{{ asset('styles\reset.css') }}">
	<link rel="stylesheet" href="{{ asset('styles\styles.css') }}">
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168543069-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168543069-1');
</script>

@stack('scripts')

	<div class="page-container clearfix">
		<header class="side-container">
			<div class="header-tagline">
				<div class="header-wripper">
					<h1 class="site-title">
						alena shminke
					</h1>
				</div>
			</div>
			<nav class="site-menu">
				<ul>
					<li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a href="{{ route('index', ['language' => session()->get('language')]) }}">Home</a></li>
					<li class="{{ Route::currentRouteName() == 'photography' ? 'active' : '' }}"><a href="{{ route('photography', ['language' => session()->get('language')]) }}">Photography</a></li>
					<li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ route('about', ['language' => session()->get('language')]) }}">About</a></li>
					<li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact', ['language' => session()->get('language')]) }}">Contact<a/></li>
				</ul>
			</nav>
			<div class="blog-link-wrapper"><a href="https://shminke.wordpress.com/">&#10155; welcome to my blog</a></div>
			<div class="copyright-social-wrapper">
				<div class="social-wrapper">
					<ul class="social-links">
						@foreach ($languages as $language)
						<li><a href="{{ route( Route::currentRouteName(), ['lang' => $language->code]) }}"><img src="{{ asset('img').'/'.$language->img }}" alt="">{{ $language->logo }}</a></li>
						@endforeach

					</ul>
				</div>
				<div class="copyright"> &copy Assembled by Maxberg</div>
			</div>

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
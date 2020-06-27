
@extends('pages.layout');

@section('content')
	<article>
		<div class="about-img">
			<img src="{{ asset('storage/'.$aboutImage) }}" alt="">						
		</div>
		<div class="about-container clearfix">
			<h1 class="about-title">{{ $header }}</h1>
			<div class="about-content">{!! $content !!}


			</div>

		</div>
	</article>
@endsection
				


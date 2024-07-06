
@extends('pages.layout')

@section('content')
	<article>
		<div class="about-img">
			<img src="{{ asset('storage/'.$aboutPage->aboutImage) }}" alt="">						
		</div>
		<div class="about-container clearfix">
			<h1 class="about-title">{{ $aboutPage->header }}</h1>
			<div class="about-content">{!! $aboutPage->content !!}</div>

		</div>
	</article>
@endsection
				


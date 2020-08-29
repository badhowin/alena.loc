@extends('pages.layout')

@section('content')
	<div class="portfolio-container">
		<section class="portfolio-list-section">
			<div class="portfolio-category-wrapper">
				<ul class="portfolio-categories">
					<li class="active">
						Through
					</li>
					<li class="">
						The lens
					</li>
					<li class="">
						Of The
					</li>
					<li class="">
						Beholder
					</li>
				</ul>
			</div>
			<div class="portfolio-listing clearfix">
				@forelse ($indexImages as $image)
				<div class="listing-item">
					<div class="list-thumbonail">
						<img class="upload-button" value="{{ $image->position }}" src="{{ asset('storage/'.$image->img) }}">									
					</div>								
				</div>
				@empty
				<div>no images on database</div>
				@endforelse
			</div>
		</section>
	</div>
@endsection
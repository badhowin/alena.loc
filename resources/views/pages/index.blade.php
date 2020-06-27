@extends('pages.layout');

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
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb1.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb2.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb3.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="'{{ asset('tmb\tmb4.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb5.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb6.jpg') }}">									
					</div>								
				</div>
				<div class="listing-item">
					<div class="list-thumbonail">
						<img src="{{ asset('tmb\tmb7.jpg') }}">									
					</div>								
				</div>
			</div>
		</section>
	</div>
@endsection
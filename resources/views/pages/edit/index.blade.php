@extends('pages.edit.layout');

@push('styles')
<link rel="stylesheet" href="{{ asset('styles\edit.index.css') }}">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('scripts\image.index.upload.js?2')}}"></script>
@endpush


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

			<form id="img-form" method="post" action="{{ route('upload.index') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input id="img-input" type="file" name="indexImage" style="display: none" />
				<input id="img-position" type="hidden" name="position" value="0" />
			</form>

			<div class="portfolio-listing clearfix">
				@forelse ($indexImages as $image)
				<div class="listing-item">
					<div class="list-thumbonail">
						<img class=""  src="{{ asset('storage/'.$image->img) }}">
						<img class="dl-icon upload-button"  value="{{ $image->position }}" src="{{ asset('img/download.png') }}">									
					</div>								
				</div>
				@empty
				<div>no images on database</div>
				@endforelse

			</div>
		</section>
	</div>
@endsection
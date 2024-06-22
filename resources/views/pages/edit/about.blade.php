
@extends('pages.edit.layout');

@push('styles')
<link rel="stylesheet" href="{{ asset('styles\edit.about.css') }}">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('scripts\image.upload.js')}}"></script>
@endpush

@section('content')
	<article>
		<div class="about-img">
			<img src="{{ asset('storage/'.$aboutImage) }}" id="upload-button" alt="">						
		</div>
		<form id="img-form" method="post" action="{{ route('upload.about') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input id="img-input" type="file" name="aboutImage" style="display: none" />
		</form>
		<div class="about-container clearfix">
			<div class="about-form-container">
			@foreach($languages as $language) 

  			<div class="form-wrapper">

					<form class="content-form" method="post" action="{{ route('save.about') }}">
					<input type="hidden" name=language value="{{ $language->code }}">
		            {{ csrf_field() }}
			            <div class="form-line single">
			            	<span>{{ $language->logo }}</span>
			            </div>
			            <div class="form-line">
			                <span>
			                    <label>Header</label>
			                </span>
			                <span>
			                    <input type="text" name="header" class="form-item"><br />
			                </span>
			            </div>
			            
			            <div class="form-line">
			                <span>
			                    <label>Content</label>
			                </span>
			                <span>
			                    <textarea id="content-{{ $language->code }}" name="content" class="form-item"></textarea><br />
			                </span>
			            </div>
			                
			            <div class="form-line single">
			            	<input type="submit">
			            </div>
		    	   	</form>  
	        </div>
	        <script>
					CKEDITOR.replace( 'content-{{ $language->code }}' );
			</script>
				@endforeach
			</div>
		</div>
	</article>

@endsection
				


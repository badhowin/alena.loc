
@extends('pages.edit.layout');

@push('styles')
<link rel="stylesheet" href="{{ asset('styles/edit.about.css') }}">
<link rel="stylesheet" href="{{ asset('styles/ckeditor5_custom.css') }}">
<link rel="stylesheet" href="{{ asset('ckeditor/ckeditor5.css') }}">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('scripts/image.upload.js') }}"></script>
    <script type="importmap">{!! '{
                "imports": {
                     "ckeditor5": "'.asset('ckeditor/ckeditor5.js').'",
                    "ckeditor5/": "'.asset('ckeditor/').'"
                }
            }' 
        !!}
    </script>
    
@endpush

@section('content')
	<article>
		<div class="about-img">
			<img src="{{ asset('storage/'.$aboutImage) }}" id="upload-button" alt="">	
            <div class=button-wrapper>
                <img class="dl-icon upload-button"  src="{{ asset('img/download.png') }}">
            </div>					
		</div>
		<form id="img-form" method="post" action="{{ route('upload.about') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input id="img-input" type="file" name="aboutImage" style="display: none" />
		</form>
		<div class="about-container clearfix">
			<div class="about-form-container">
			@foreach($languages as $language) 

  			<div class="form-wrapper">

					<form class="content-form form-{{ $language->code }}" method="post" action="{{ route('save.about') }}">
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
			                    <input type="text" 
                                       name="header" 
                                       class="form-item" 
                                       value="{{ $aboutPages->where('language', $language->code)->first()->header }}">
                                <br />
			                </span>
			            </div>
			            
			            <div class="form-line">
			                <span>
			                    <label>Content</label>
			                </span>
			                <span>
							<div class="editor-container editor-container_classic-editor" id="editor-container">
								<div class="editor-container__editor">
                                    <textarea id="content-{{ $language->code }}" 
                                              name="content-{{ $language->code }}" 
                                              class="form-item">
                                                {{ $aboutPages->where('language', $language->code)->first()->content }}
                                    </textarea>
                                    <br />
                                </div>
							</div>
			                    
			                </span>
			            </div>
			                
			            <div class="form-line single">
			            	<input type="submit" class="submit-{{ $language->code }}">
			            </div>
		    	   	</form>  
	        </div>
			<script type="module">
	                import { createEditor } from "{{ asset('scripts/ckeditor5_custom.js') }}";
					createEditor('{{ $language->code }}');
			</script>
				@endforeach
			</div>
		</div>
	</article>

@endsection
				


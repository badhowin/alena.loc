@extends('pages.edit.layout')

@push('styles')
<link rel="stylesheet" href="{{ asset('styles/edit.contact.css') }}">
<link rel="stylesheet" href="{{ asset('styles/ckeditor5_custom.css') }}">
<link rel="stylesheet" href="{{ asset('ckeditor/ckeditor5.css') }}">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="scripts\script.js"></script>
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
	<div class="contact-container clearfix">
			<div class="contact-form-container">
			@foreach($languages as $language) 

  			<div class="form-wrapper">

					<form class="content-form" method="post" action="{{ route('save.contact') }}">
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
			                    <div class="editor-container editor-container_classic-editor" id="editor-container">
                                    <div class="editor-container__editor"><textarea id="content-{{ $language->code }}" name="content-{{ $language->code }}" class="form-item"></textarea><br /></div>
                                </div>
			                </span>
			            </div>
			                
			            <div class="form-line single">
			            	<input type="submit">
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
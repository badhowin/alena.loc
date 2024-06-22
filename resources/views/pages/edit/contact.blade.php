@extends('pages.edit.layout')

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="scripts\script.js"></script>
@endpush

@section('content')
	<article>
		<div class="contact-container clearfix">
			<h1 class="contact-title">Contact</h1>
			<div class="contact-content">
				<p>If you have got something to say to me, you can do it here.</p>
				<p>Or find me on:</p>
				<p><strong>Facebook:&nbsp;&nbsp;&nbsp;</strong><a href="https://www.facebook.com/alena.shminke">www.facebook.com/alena.shminke</a><br> <strong>Blog:&nbsp;&nbsp;&nbsp;</strong><a href="https://shminke.wordpress.com">shminke.wordpress.com</a><br> 

				<p>&nbsp;</p>
				<hr>
				<p>&nbsp;</p>
				<form action="" id="contact_form" method="post" class="mail-form">
					<p>
						<label> Your Name (required)<br> 
						<input type="text" name="name" value="" size="40" class="input-name">
						</label>
					</p>
					<p>
						<label> Your Email (required)<br> 
						<input type="email" name="email" value="" size="40" class="input-email">
						</label>
					</p>
					<p>
						<label> Subject<br> 
						<input type="text" name="subject" value="" size="40" class="input-subject">
						</label>
					</p>
					<p>
						<label> Your Message<br>
						<textarea name="message" cols="40" rows="10" class="textarea-message"></textarea>
						</label>
					</p>
					<p>
						<input id="btn" type="button" value="Send" class="button-submit">
						<span id="indicator"></span>
					</p>
				</form>
				<div id="response-status" style="visibility: hidden">err</div>
			</div>
		</div>
	</article>
@endsection
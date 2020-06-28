
$( document ).ready(function() {
	$('.upload-button').on('click', function() {
		$('#img-position').attr('value', $(this).attr('value'));
	    $('#img-input').trigger('click');
	});

	$('#img-input').change( function(){ 

		$('form#img-form').submit();

	});

});
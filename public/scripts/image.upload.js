
$( document ).ready(function() {
	$('#upload-button').on('click', function() {
	    $('#img-input').trigger('click');
	});

	$('#img-input').change( function(){ 

		$('form#img-form').submit();

	});

});
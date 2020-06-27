$( document ).ready(function() {
    $("#btn").click(
		function(){
			var resultSuccess = checkFields('response-status', 'contact_form');
			if (resultSuccess){
				 sendAjaxForm('response-status', 'contact_form', 'send.php');
			}
			return false; 
		}
	);
});

function sendAjaxForm(result_form, ajax_form, url) {
	$("#indicator").css('visibility', 'visible');
	$.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	$("#indicator").css('visibility', 'hidden');
        	$("#"+result_form).css('visibility', 'visible')
        					  .removeClass('status-error')
        					  .addClass('status-success')
        					  .html('Information send sucessfully!');
    	},
    	error: function(response) { // Данные не отправлены
            $("#"+result_form).css('visibility', 'hidden')
            				  .removeClass('status-success')
        					  .addClass('status-error')
        					  .html('Some server error.');
    	}
 	});	
}

function checkFields(result_form, ajax_form){
	var response = true;

	var name = $("#"+ajax_form+" .input-name").val();
	if (name.length <= 0) {
		$("#"+result_form).css('visibility', 'visible')
						  .removeClass('status-success')
                          .addClass('status-error')
         				  .html('some required field is wrong');
        response = false;
	}

	var email = $("#"+ajax_form+" .input-email").val();
	if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
		$("#"+result_form).css('visibility', 'visible')
                          .removeClass('status-success')
                          .addClass('status-error')
         				  .html('some required field is wrong');
        response = false;
	}

	return response;
}
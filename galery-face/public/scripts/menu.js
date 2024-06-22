$(document).ready(function(){

  $("#mobile-menu-button").click(function(){
  	$("#mobile-menu-list").css("display") == "block"? $("#mobile-menu-list").css("display", "none"): $("#mobile-menu-list").css("display", "block"); 
  	$(".main-container").click(function(){
	  	$("#mobile-menu-list").css("display", "none");

  	
  });
 });
});






$(document).ready(function() {
  
  $("a.login").click(function(){
	$(".box-login").css("display", "block");
  });

  $(".cancel").click(function(){
  	$(".box-login").hide();
  })

 //  $("a.login").mouseout(function(){
	// $(".box-login").css("display", "none");
 //  });


});



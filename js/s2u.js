$(document).ready(function() {
  
  $("a.login").click(function(){
	$(".box-login").css("display", "block");
  });

  $(".cancel").click(function(){
  	$(".box-login").hide();
  });

  $(".enviar-formulario").click(function(){
	alert("Cadastro Realizado com Sucesso");
  });

});



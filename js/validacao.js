		$(document).ready(function() {
			$("#caixaNome").keyup(function() {

					var nome = $(this).val().replace(/[^A-Z,a-z, ,�,�,�,�,�,�,�,�,�,�,-]+/g,'');

					$(this).val(nome);
			});	
			
			$("#caixaCpf").keyup(function(){
				var cpf = $(this).val().replace(/[^0-9]+/g,'');
				$(this).val(cpf);
			
			});
			
			$("#botaoEnviar").click(function(){
			
				var email = $("#caixaEmail").val();
				var patt = /[a-z]+\@[a-z]+\.[a-z]+[\.[a-z]+]?/gi;
				if(email.match(patt)){
					return true
				}else {
					alert('email inv�lido')
					return false
				}
			});	
			$("#botaoEnviar").click(function(){
				if($("#caixaConfirmarSenha").val() != $("#caixaSenha").val()){
					alert('Senhas n�o conferem')
					return false
					}
			});	
			
			
			
		});			

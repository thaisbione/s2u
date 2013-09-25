<?php

    include '../essentials/conexao.php';

	$result = mysql_query("SELECT * FROM clientes");
	

	$arquivoNome = $_FILES['imagem']['name'];
	$localTemp = $_FILES['imagem']['tmp_name'];
	$destino = "/var/www/s2u/imagens/".$arquivoNome;
	
	
		
	move_uploaded_file($localTemp,$destino);
	
	$connection = mysql_connect("localhost","root","12345") or die ("Não foi possível conectar: ".mysql_error()); 
			
	$banco = mysql_select_db("s2u",$connection) or die ("Não foi possível abrir o banco: ".mysql_error());
	
	$sql = mysql_query("INSERT INTO clientes (nomeServico,descricao,imagem, telefone) VALUES ('$_POST[nomeServico]','$_POST[descricao]','$arquivoNome', '$_POST[telefone]')") or die ("Erro ao inserir".mysql_error());
			
	
	echo"<script>alert('Cadastro Realizado com Sucesso!!');
						window.location.href = 'index.php';
						</script>";;
		

?>
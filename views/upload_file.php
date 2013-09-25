<?php 
		
	$arquivoNome = $_FILES['file']['name'];
	$localTemp = $_FILES['file']['tmp_name'];
	$destino = "/var/www/s2u/images/".$arquivoNome;
	
	
		
	move_uploaded_file($localTemp,$destino);
	
	$connection = mysql_connect("localhost","root","12345") or die ("Não foi possível conectar: ".mysql_error()); 
			
	$banco = mysql_select_db("s2u",$connection) or die ("Não foi possível abrir o banco: ".mysql_error());
	
	$sql = mysql_query("INSERT INTO clientes (nomeServico,descricao,imagem) VALUES ('$_POST[nomeServico]','$_POST[descricao]','$arquivoNome')") or die ("Erro ao inserir".mysql_error());
			
	
	echo "Arquivo enviado";
		
?>
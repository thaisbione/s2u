<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
	<script src="../js/s2u.js"></script>
	<title>Services to You</title>
	<script> $("a.entrar").click(function(){
		 $(".box-login").css("display", "block");
		 });
		 $(".cancel").click(function(){
		 $(".box-login").hide();
		 });>
	</script>	
</head>
<body>
	<div class="content">
		<div class="header">
			<div class="logomarca">
				<span class="texto">S2U</span>
				<p class="descricao">Solucão em Serviços</p>
			</div>
			<?php
				include 'box-login.php';
			?>
		</div>

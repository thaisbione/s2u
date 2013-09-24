<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
	<script src="js/s2u.js"></script>
	<title>Services to You</title>
	<script> $("a.login").click(function(){
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
			<a class="login">Entrar</a>
			<?php include('box-login.php'); ?>
			<ul class="menu">
				<li class="current-user">Olá <span class="nome-usuario"> <?php if ($_SESSION['nome'] == $null) { echo "Convidado"; } else { echo $_SESSION['nome']; } ?>  </span> Bem vindo ao S2U seu portal de serviços. </li>
				<li><a href="contato.php">Contato</a></li>
				<li><a href="adquirir.php">Adquirir Serviço</a></li> 
				<li><a href="oferecer.php">Oferecer Serviço</a></li> 
				<li><a href="index.php">Inicio</a></li>
			</ul>
		</div>

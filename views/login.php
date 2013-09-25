<?php
        include '../essentials/conexao.php';
	$consulta = "SELECT * FROM cadastrousers2u WHERE email = '" . $_POST['email'] . "'";
	$result = mysql_query($consulta);
	$dados = mysql_fetch_array($result);	
        if ($dados['senha'] == $_POST['senha']) {
            session_start();
	    $_SESSION['login'] = $dados['email'];
	    $_SESSION['nome'] = $dados['nome'];
	    header("location:/s2u/views/index.php");
	    }
        else {
	    echo "<script>alert('E-mail ou senha invalidos');</script>";
	     }
	mysql_close($connection);

?>
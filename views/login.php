<?php
        include '../essentials/conexao.php';
	$consulta = "SELECT * FROM cadastrousers2u WHERE email = '" . $_POST['email'] . "'";
	$result = mysql_query($consulta);
	$dados = mysql_fetch_array($result);	
        if ($dados['senha'] == $_POST['senha']) {
	    echo "SENHA OK";
            session_start();
	    $_SESSION['login'] = $dados['email'];
	    $_SESSION['nome'] = $dados['nome'];
	    echo "\n SESSAO OK";
	    echo $_SESSION['login'];
	    }
        else {
	    echo "SENHA INVALIDA";
	     }
	mysql_close($connection);

?>
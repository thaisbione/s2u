<?php

			
                        include '../essentials/conexao.php';
			$consulta = "SELECT * FROM cadastrousers2u WHERE email = '" . $_POST['email'] . "'";
			$result = mysql_query($consulta);
			$dados = mysql_fetch_array($result);
			echo $dados['email']  . $dados['senha'];
			mysql_close($connection);
			


 ?>
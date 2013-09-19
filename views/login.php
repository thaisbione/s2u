<?php

			
                        include 'conexao.php';
			
			$result = mysql_query("SELECT * FROM cadastrousers2u");
			echo $_POST['email'];
			mysql_close($connection);
			


 ?>
<?php
	include 'default.php';
?>
		<div class="context">
		<div id="adquirir-servico">
		<h2>Adquirir Serviços</h2>
			
		<?php
			$connection = mysql_connect("localhost","root","12345") or die ("Não foi possível conectar: ".mysql_error()); 
			
			$banco = mysql_select_db("s2u",$connection) or die ("Não foi possível abrir o banco: ".mysql_error());
			
			$result = mysql_query("SELECT * FROM clientes");
			
			$linhaAfetada = mysql_num_rows($result); 
			
			if($linhaAfetada == 0){
				echo "<script>alert('Nenhum Serviço Cadastrado!!')</script>";
			}else{
				
				while($linha = mysql_fetch_array($result)){
				
					echo '<h3>Nome Servico: </h3>'. $linha['nomeServico']. "<br>" . '<h3>Descricao: </h3>' .$linha['descricao']. '<h3>Imagem</h3>' . "<img src='../imagens/".$linha['imagem']."' width='300px' height='200px'/>".'<h3>Telefone para contato</h3>'.$linha['Telefone'];
					
					
				}
			}
			
			mysql_close($connection);
			
		?>		
			
		</div>
		</div>
	</div>
</body>
</html>

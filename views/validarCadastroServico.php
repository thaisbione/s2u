<?php

    include '../essentials/conexao.php';
			
	$result = mysql_query("SELECT * FROM clientes");
	
	$linhaAfetada = mysql_num_rows($result);
	if ($linhaAfetada == 0) {
		$inserir = mysql_query("INSERT INTO clientes (id,nomeServico, descricao, imagem) VALUES ('$_POST[nomeServico]','$_POST[userId]','$_POST[descricao]','$_POST[imagem]')") or die ("Erro ao inserir".mysql_error());
			echo "<script>alert('Cadastro Realizado com Sucesso!!');
					window.location.href = 'index.php';
					</script>";
					mysql_close($connection);
				}
	else {
		while($linha = mysql_fetch_array($result)){
			if($linha['id'] == $_POST['userId']){
				echo "<script>alert('Usuário com serviço já cadastrado');
						history.go(-1);
						</script>";
			}else /*if($linha['userId'] == '' && $linha['cpf'] == '' && $linha['rg'] == '')*/{
			$inserir = mysql_query("INSERT INTO clientes (id,nomeServico,descricao,imagem) VALUES ('$_POST[nomeServico]','$linha[id]','$_POST[descricao]','$_POST[imagem]')") or die ("Erro ao inserir".mysql_error());
				echo "<script>alert('Cadastro Realizado com Sucesso!!');
						window.location.href = 'index.php';
						</script>";
				mysql_close($connection);			
			}
		}
	}
	
?>
<?php

    include '../essentials/conexao.php';
			
			$result = mysql_query("SELECT * FROM cadastrousers2u");
			
			$linhaAfetada = mysql_num_rows($result);
			if ($linhaAfetada == 0) {
			echo "ENTROU NO IF";
			$inserir = mysql_query("INSERT INTO cadastrousers2u (nome,sobrenome,email,userId,senha,endereco,cpf,rg) VALUES ('$_POST[nome]','$_POST[sobrenome]','$_POST[email]','$_POST[username]','$_POST[senha]','$_POST[endereco]','$_POST[cpf]','$_POST[rg]')") or die ("Erro ao inserir".mysql_error());
					echo "<script>alert('Cadastro Realizado com Sucesso!!');
							window.location.href = 'index.php';
							</script>";
						}
			else {
			while($linha = mysql_fetch_array($result)){
					
				if($linha['username'] == $_POST['username']){
					echo "<script>alert('UserID já cadastrado');
							history.go(-1);
							</script>";
				}else if($linha['cpf'] == $_POST['cpf']){
					echo "<script>alert('CPF já cadastrado');
							history.go(-1);
							</script>";
				}else if($linha['rg'] == $_POST['rg']){
					echo "<script>alert('RG já cadastrado');
							history.go(-1);
							</script>";
				}else /*if($linha['userId'] == '' && $linha['cpf'] == '' && $linha['rg'] == '')*/{
				$inserir = mysql_query("INSERT INTO cadastrousers2u (nome,sobrenome,email,userId,senha,endereco,cpf,rg) VALUES ('$_POST[nome]','$_POST[sobrenome]','$_POST[email]','$_POST[username]','$_POST[senha]','$_POST[endereco]','$_POST[cpf]','$_POST[rg]')") or die ("Erro ao inserir".mysql_error());
					echo "<script>alert('Cadastro Realizado com Sucesso!!');
							window.location.href = 'index.php';
							</script>";
					
				}
			}
			}
			mysql_close($connection);
			
?>
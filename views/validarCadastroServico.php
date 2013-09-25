<?php

    include '../essentials/conexao.php';

	$result = mysql_query("SELECT * FROM clientes");
	
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["imagem"]["name"]);
	$extension = end($temp);
	if ((($_FILES["imagem"]["type"] == "image/gif")
	|| ($_FILES["imagem"]["type"] == "image/jpeg")
	|| ($_FILES["imagem"]["type"] == "image/jpg")
	|| ($_FILES["imagem"]["type"] == "image/pjpeg")
	|| ($_FILES["imagem"]["type"] == "image/x-png")
	|| ($_FILES["imagem"]["type"] == "image/png"))
	&& ($_FILES["imagem"]["size"] < 200000)
	&& in_array($extension, $allowedExts))
	  {
	  if ($_FILES["imagem"]["error"] > 0)
	    {
	    echo "Return Code: " . $_FILES["imagem"]["error"] . "<br>";
	    }
	  else
	    {
	    echo "Upload: " . $_FILES["imagem"]["name"] . "<br>";
	    echo "Type: " . $_FILES["imagem"]["type"] . "<br>";
	    echo "Size: " . ($_FILES["imagem"]["size"] / 1024) . " kB<br>";
	    echo "Temp file: " . $_FILES["imagem"]["tmp_name"] . "<br>";

	    if (file_exists("upload/" . $_FILES["imagem"]["name"]))
	      {
	      echo $_FILES["imagem"]["name"] . " already exists. ";
	      }
	    else
	      {
	      move_uploaded_file($_FILES["imagem"]["tmp_name"],"upload/" . $_FILES["imagem"]["name"]);
	      echo "Stored in: " . "upload/" . $_FILES["imagem"]["name"];
	      }
	    }
	  }
	else
	  {
	  echo "Imagem Inválida";
	  }
	$linhaAfetada = mysql_num_rows($result);
	if ($linhaAfetada == 0) {
		$inserir = mysql_query("INSERT INTO clientes (nomeServico, descricao, imagem) VALUES ('$_POST[nomeServico]','$_POST[descricao]','$_FILES[imagem]')") or die ("Erro ao inserir".mysql_error());
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
			$inserir = mysql_query("INSERT INTO clientes (nomeServico,descricao,imagem) VALUES ('$_POST[nomeServico]','$_POST[descricao]','$_FILES[imagem]')") or die ("Erro ao inserir".mysql_error());
				echo "<script>alert('Cadastro Realizado com Sucesso!!');
						window.location.href = 'index.php';
						</script>";
				mysql_close($connection);			
			}
		}
	}
	
?>
<?php
    if (array_key_exists('msg', $_GET)){
        $msg=$_GET['msg'];
        if ($msg=='excOk'){
            echo "<script type='text/javascript'>alert('Exclusão realizada com sucesso!')</script>";
        } else  if ($msg=='cadOk'){
            echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!')</script>";
        }
        else if ($msg=='ediOk'){
            echo "<script type='text/javascript'>alert('Edição realizada com sucesso!')</script>";
        }
    }
?>

<?php

    include '../essentials/conexao.php';
    $cpf = $_GET['cpf'];
    $nome =$_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $username = $_GET['username'];
    $cpfBD = "SELECT cpf FROM cliente WHERE cpf='$cpf'";
    if ($nome==''){
        $msg = 'erroCampoEmBranco';   

    }else if(strlen($cpf)!=14){
        $msg = 'erroCampoInvalido';

    }else if(mysql_num_rows(mysql_query($cpfBD))>0){
        $msg='erroCPFUtilizado';

    }else{
        $insertTabela = "INSERT INTO cliente(cpf,nome,sobrenome, username) values ('$cpf','$nome','$sobrenome','$username')";
        mysql_query($insertTabela);
        $msg='cadOk';
        echo '<script>alert("houve Erro")</script>';
    }

?>
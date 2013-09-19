<?php
    include 'conexao.php';
    $cpf = $_GET['cpf'];
    $nome =$_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $identidade = $_GET['identidade'];
    $cpfBD = "SELECT cpf FROM cliente WHERE cpf='$cpf'";
    if ($nome==''){
        $msg = 'erroCampoEmBranco';   
    }else if(strlen($cpf)!=14){
        $msg = 'erroCampoInvalido';
    }else if(mysql_num_rows(mysql_query($cpfBD))>0){
        $msg='erroCPFUtilizado';
    }else{
        $insertTabela = "INSERT INTO cliente VALUES ('$cpf','$nome','$sobrenome','$identidade')";
        mysql_query($insertTabela);
        $msg='cadOk';
    }
?>

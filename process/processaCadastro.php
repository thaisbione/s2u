<?php
    include '../essentials/conexao.php';
    $cpf = $_GET['cpf'];
    $nome =$_GET['nome'];
    $sexo = $_GET['sexo'];
    $disciplina = $_GET['disciplina'];
    $cpfBD = "SELECT cpf FROM tb_professores WHERE cpf='$cpf'";
    if ($nome==''){
        $msg = 'erroCampoEmBranco';   
        Header("location:../views/cadastrar.php?msg=$msg");
    }else if(strlen($cpf)!=14){
        $msg = 'erroCampoInvalido';
        Header("location:../views/cadastrar.php?msg=$msg");
    }else if(mysql_num_rows(mysql_query($cpfBD))>0){
        $msg='erroCPFUtilizado';
        header("location:../views/cadastrar.php?msg=$msg");
    }else{
        $insertTabela = "INSERT INTO tb_professores VALUES ('$cpf','$nome','$sexo','$disciplina')";
        mysql_query($insertTabela);
        $msg='cadOk';
        Header("location:../views/index.php?msg=$msg");
    }
?>

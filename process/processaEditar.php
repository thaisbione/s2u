<?php
    include '../essentials/conexao.php';
    $cpf=$_GET['cpf'];
    $nome=$_GET['nome'];
    $sexo=$_GET['sexo'];
    $disciplina=$_GET['disciplina'];
    if ($nome==''){
        $msg = 'erroCampoEmBranco';   
        Header("location:../views/editarProfessor.php?msg=$msg&cpf=$cpf");
    }else{   
    $query="UPDATE tb_professores SET nome='$nome',sexo='$sexo',disciplina='$disciplina' WHERE cpf='$cpf'";
    mysql_query($query);
    $msg='ediOk';
        header("Location:../views/index.php?msg=$msg");
    }
?>

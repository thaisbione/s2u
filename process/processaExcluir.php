<?php
    include '../essentials/conexao.php';
    $resp = $_GET['resp'];
    if($resp=='TODOS'){
        $query = "DELETE FROM tb_professores";
    }else{
       $query="DELETE FROM tb_professores WHERE cpf='$resp'"; 
    } 
    mysql_query($query);
    $msg='excOk';   
    Header("location:../views/index.php?msg=$msg");
?>

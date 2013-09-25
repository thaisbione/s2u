<?php
    $connection = mysql_connect("localhost","root","12345") or die ("Não foi possível conectar: ".mysql_error()); 
    $banco = mysql_select_db("s2u",$connection) or die ("Não foi possível abrir o banco: ".mysql_error());
    
?>

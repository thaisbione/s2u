<!DOCTYPE html>
<html>
    <head>
        <title>Professor Digital</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="../essentials/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="corpo">
            <div id="topo"></div>
            <?php
                include 'menu.html';
            ?>
            <div id="conteudo">
                <?php
                include '../essentials/conexao.php';                              
                $resposta = $_GET['resposta'];               
                if ($resposta == 'TODOS'){
                    $SELECT="SELECT * FROM tb_professores ORDER BY nome";             
                    $res=mysql_query($SELECT);  
                    while($row = mysql_fetch_array($res)){
                        echo"<div id=visualizar>";
                        echo "<fieldset>";
                          echo "<legend> ".$row['nome']."</legend>";
                          echo "<label for=cpf>CPF:&nbsp;".$row['cpf']."</label><br/>";
                          echo "<label for=sexo>Sexo:&nbsp;".$row['sexo']."</label><br/>";
                          
                          echo "<label for=disciplina>Disciplina:&nbsp;".$row['disciplina']."</label><br/>";
                        echo"</fieldset><br/>";
                        echo"</div>";
                        
                    }
                    
                }else{ 
                    $SELECT="SELECT * FROM tb_professores WHERE cpf='$resposta'";
                    $res=mysql_query($SELECT);
                    $professor=mysql_fetch_array($res);
                    echo"<div id=visualizar>";
                    echo "<fieldset>";
                        echo "<legend> ".$professor['nome']."</legend>";
                        echo "<label for=cpf>CPF:&nbsp;".$professor['cpf']."</label><br/>";
                        echo "<label for=sexo><b>Sexo:&nbsp;<style='font-weight:ihenrit'>".$professor['sexo']."</label><br/>";
                        echo "<label for=disciplina>Disciplina:&nbsp;".$professor['disciplina']."</label><br/>";
                        echo '</fieldset>';
                    echo"<br/></div>";
                }
                ?>
                
            </div>
            <?php
                include 'rodape.html';
            ?>
        </div>
        
    </body>
</html>
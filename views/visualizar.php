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
                    $SELECT="SELECT cpf FROM tb_professores";
                    $res=  mysql_query($SELECT);
                    if(mysql_num_rows($res)==0){
                        echo '<h1 style="text-align:center">Visualização do Cadastro de Professores</h1>';
                        echo '<br/><h3>Nenhum(a) professor(a) cadastrado(a).</h3><br/>';
                    }else{
                        $arrayCpf=array();
                        while ($row = mysql_fetch_array($res)){
                            $arrayCpf[] = $row['cpf'];
                        }
                        echo '<h1 style="text-align: center">Visualização do Cadastro de Professores</h1>';
                        echo 'Selecione o CPF do(a) professor(a) que você deseja visualizar:<br/>';
                        echo '<br/>OBS: Para visualizar todos os professores cadastrados, selecione a opção TODOS<br/>';
                        echo '<br /><form action="visualizarProfessor.php" method="get">';
                        echo '<select name="resposta">';
              
                        foreach ($arrayCpf as $indice){
                            echo "<option value='$indice' id=boxOption>$indice</option>";
                        }
                        echo "<option value='TODOS' id=boxOption>TODOS</option>";
                        echo '</select>';
                        echo '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="submit" value="Selecionar"/>';
                        
                        echo '</form>'; 
                    }
                ?>  
            </div>
            <?php
                include 'rodape.html';
            ?>
        </div>
        
    </body>
</html>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
    <script src="js/s2u.js"></script>
    <script>
        $(document).ready(function() {
            $("#caixaNome").keyup(function() {

                    var nome = $(this).val().replace(/[^A-Z,a-z, ,ã,á,à,â,ê,í,ú,õ,é,ü,-]+/g,'');

                    $(this).val(nome);
            }); 
            
            
            
            
        });     
    </script>
<script>
function validaCpf(){
    var cpf = document.getElementById('caixaCpf').value;
    //alert(cpf);
    
    var digitos = cpf.substring(0,9);
    var dvd = cpf.substring(9,11);
    //alert(digitos);
    var soma1 = 0;
    for(var i = 0;i < digitos.length; i++ ){
        soma1 += digitos[i]*(10 - i);
        //alert(soma1)
        }
    var modulo1 = soma1 % 11;
    //alert(modulo1);
    if(modulo1 == 0 || modulo1 == 1){
        var dv1 = 0;
        }else{
            var dv1 = 11 - modulo1;
            }
            //alert('DV1 Encontrado: '+dv1);
            //alert('DV1 Digitado: '+dvd[0])
    if(dv1 != dvd[0]){
        
        alert('CPF invalido')
        return false
        }
        
    dv1 *= 2;
    //alert(dv1)
    var soma2 = 0;
    for(var i = 0;i < digitos.length; i++ ){
        soma2 += digitos[i]*(11 - i);
        //alert(soma2)
        }
        soma2 +=dv1;
        //alert(soma2) 
        var modulo2 = soma2 % 11;
    if(modulo2 == 0 || modulo2 == 1){
        var dv2 = 0;
        }else {
            var dv2 = 11 - modulo2;
            }
            //alert('DV2 Encontrado: '+dv2);
            //alert('DV2 Digitado: '+dvd[1])    
    if(dv2 != dvd[1]){
        //document.getElementById('cpfInvalido').innerHTML="CPF Invalido"
        alert('CPF invalido')
        return false
        }
                
    }
    
</script>

<script>
function campoVazio(){
    var x1 = document.getElementById("caixaNome").value;
    if(x1 == null || x1 == ""){
        alert("Nome Requerido");
        return false;
    }
    var x2 = document.getElementById("caixaSobrenome").value;
    if(x2 == null || x2 == ""){
        alert("Sobrenome Requerido");
        return false;
    }
    var x3 = document.getElementById("caixaEmail").value;
    if(x3 == null || x3 == ""){
        alert("Email Requerido");
        return false;
    }
    var x5 = document.getElementById("caixaSenha").value;
    if(x5 == null || x5 == ""){
        alert("Senha Requerida");
        return false;
    }
    var x6 = document.getElementById("caixaConfirmarSenha").value;
    if(x6 == null || x6 == ""){
        alert("Confirmação de Senha Requerida");
        return false;
    }
    var x7 = document.getElementById("caixaEndereco").value;
    if(x7 == null || x7 == ""){
        alert("Endereço Requerido");
        return false;
    }
    var x8 = document.getElementById("caixaCpf").value;
    if(x8 == null || x8 == ""){
        alert("CPF Requerido");
        return false;
    }
    var x9 = document.getElementById("caixaRg").value;
    if(x9 == null || x9 == ""){
        alert("RG Requerido");
        return false;
    }
}
</script>
    
<script>
    function validaEmail(){
        var email = document.getElementById("caixaEmail").value;
        var patt = /[a-z,-,_]+[0-9]*\@[a-z]+\.[a-z]+(\.[a-z]+)?/gi;
        if(email.match(patt)){
                    return true
            }else {
                    alert('email inválido')
                    return false
            }
    }
</script>

<script>
    function confereSenhas(){
        var senha = document.getElementById("caixaSenha").value;
        var confSenha = document.getElementById("caixaConfirmarSenha").value;
        
        if(senha != confSenha){
            alert("Senhas Não Conferem");
            return false;
        }
    }

</script>

<script>    
    function verificaForm(){
        
        if(campoVazio() == false || validaEmail() == false || confereSenhas() == false || validaCpf() == false){
            //alert("Informação Incorreta no Formulário");
            return false;
        }
    }
    
</script>

    <title>Services to You</title>
</head>
<body>
    <div class="content">
        <div class="header">
            <div class="logomarca">
                <span class="texto">S2U</span>
                <p class="descricao">Solucão em Serviços</p>
            </div>
            <?php include('box-login.php'); ?>
        </div>
        <div class="context">
            <div id="novo-cadastro">
                <h1 class="cadastre-se">Cadastre-se</h1>
                <form id="dadosFormulario" action="gravarCadastro.php" method="post" onsubmit="return verificaForm()">
                    <span>
                        <label for="nome1" id="labelNome">Nome:</label>
                        <input type="text"  placeholder="Informe aqui o seu nome" name="nome" id="caixaNome"/>
                    </span>
                    <span>
                        <label for="sobrenome" id="labelSobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" placeholder="Informe seu sobrenome" id="caixaSobrenome"/>
                    </span>
                    <span>
                        <label for="email" id="labelEmail">E-mail:</label>
                        <input type="email" name="email" placeholder="Informe seu e-mail" id="caixaEmail"/>
                    </span>
                    <span>
                        <label for="senha" id="labelSenha">Senha:</label>
                    <input type="password" name="senha" placeholder="Informe sua senha" id="caixaSenha"/>
                    <span>
                        <label for="confirmarSenha" id="labelConfirmarSenha">Confirmar Senha:</label>
                        <input type="password" name="confirmarSenha" placeholder="Por favor, confirme a senha informada" id="caixaConfirmarSenha">
                    </span>
                    <span>
                        <label for="endereco" id="labelEndereco">Endereço:</label>
                        <input type="text" name="endereco" placeholder="Informe seu endereço" id="caixaEndereco">
                    </span>
                    <span>
                        <label for="cpf" id="labelCpf">C.P.F.:</label>
                        <input type="text" name="cpf" placeholder="Informe seu CPF, utilize apenas números" id="caixaCpf" maxlength="11">
                    </span>
                    <span>
                        <label for="rg" id="labelRg">R.G.:</label>
                        <input type="text" name="rg" placeholder="Informe seu RG" id="caixaRg">
                    </span>
                    <input type="submit" class="enviar-formulario" value="Enviar" id="botaoEnviar">
                    
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
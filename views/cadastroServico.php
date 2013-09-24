<form id="dadosFormulario" action="validarCadastroServico.php" method="post" onsubmit="return verificaForm()">
    <span>
        <label for="userId" id="labelNome">Insira seu id de Usuário:</label>
        <input type="text"  placeholder="Informe aqui o seu nome" name="userId" id="caixaNome"/>
    </span>
    <span>
        <label for="nomeServico" id="labelSobrenome">Servico a ser oferecido:</label>
        <input type="text" name="nomeServico" placeholder="Insira o nome de seu servico" id="caixaSobrenome"/>
    </span>
    <span>
        <label for="descricao" id="labelEmail">Descrição:</label>
        <input name="descricao" placeholder="Descreva seu serviço" id="caixaEmail"/>
    </span>
    <span>
        <label for="imagem" id="labelSenha">Imagem:</label>
        <input type="text" name="imagem" placeholder="Informe sua senha" id="caixaSenha"/>
    </span>
    <input type="submit" class="enviar-formulario" value="Enviar" id="botaoEnviar">    
</form>
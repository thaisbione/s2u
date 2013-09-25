<?php
	include 'default.php';
?>
		<div class="context">
      <div id="cadastro-servico">
        <h1 class="cadastre-se">Cadastrar Novo Serviço</h1>
  			<form id="dadosFormulario" action="validarCadastroServico.php" method="post" onsubmit="return verificaForm()">
  			    <span>
  			        <label for="nomeServico" id="labelSobrenome">Servico a ser oferecido:</label>
  			        <input type="text" name="nomeServico" placeholder="Insira o nome de seu servico" id="caixaSobrenome"/>
  			    </span>
  			    <span>
  			        <label for="descricao" id="labelEmail">Descrição:</label>
  			        <textarea cols="55" rows="10" name="descricao" placeholder="Descreva seu serviço" id="caixaEmail"/></textarea>
  			    </span>
  			    <span>
  			        <label for="imagem" id="labelSenha">Imagem:</label>
  			        <input type="text" name="imagem" placeholder="escolha a imagem" id="caixaSenha"/>
  			    </span>  
  			    <input type="submit" class="enviar-formulario" value="Enviar" id="botaoEnviar">    
  			</form>
      </div>
		</div>
	</div>
</body>
</html>

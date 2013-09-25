<div class="box-login">
	<form action="login.php" method="post">
		<input name="email" placeholder="Insira aqui seu e-mail">
		<input name="senha"  type="password" placeholder="Insira sua senha">
		<div class="actions">
			<button type='submit'>Enviar</button>
			<input type="button" class="cancel" value="Cancelar" style="width: 61px; height: 21px;">
			<span class="cadastrar">
				<a href="cadastro.php">Quero me cadastrar!</a>
			</span>
		</div>
	</form>
</div>
  <?php session_start("logado");
  if ($_SESSION['nome'] == "") { echo '<a class="login">Entrar</a>'; }
  else { echo '<a href="logout.php" class="login" onclick="$("a.login").click(function(){
	  $(".box-login").css("display", "block");
	  });">Sair</a>'; }
	  echo '<ul class="menu">';
	  echo '<li class="current-user">Olá <span class="nome-usuario">'; if ($_SESSION['nome'] == $null) { echo "Convidado"; } else { echo $_SESSION['nome']; } echo '</span> Bem vindo ao S2U seu portal de serviços. </li>';
	  echo '<li><a href="contato.php">Contato</a></li>';
	  if ($_SESSION['nome'] != "") { echo '<li><a href="adquirir.php">Adquirir Serviço</a></li>'; }
	  if ($_SESSION['nome'] != "") { echo '<li><a href="oferecer.php">Oferecer Serviço</a></li>'; }
	  echo '<li><a href="index.php">Inicio</a></li>';
	  echo '</ul>';
   ?>
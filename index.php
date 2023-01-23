<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<script src="js.js"></script>
    <title>Helpdesk - Login</title>
</head>
<body>
    
	<div id="form_display">
	    <div id="body_form">

			<form action="valida_login.php" method="post">
				<label for="login">Usuario</label>
				<input type="text" id="login" name="login">
	
				<label for="senha">Senha</label>
				<input type="password" id="senha" name="senha">
	
				<? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
				<div class='erro'>
					<span>Usuário ou senha inválido(s)</span>
				</div>
				<? } elseif (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
				<div class='erro'>
					<span>Por favor realize o login!</span>
				</div>
				<? } elseif (isset($_GET['login']) && $_GET['login'] == 'logoff') { ?>
				<div class='sucesso'>
					<span>Você deslogou!</span>
				</div>
				<? } ?>

				<input type="submit" value="Login">
			</form>

	    </div>
	</div>
	
</body>
</html>
</body>
</html>
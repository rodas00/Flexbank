<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/menu.css">
</head>
<body>
	
<div id="container">
    <div id="corpo-text">
		<h1>Bem Vindo de volta</h1>
		<h3>clique aqui se ja tem conta</h3>
		<a href="login.php" id="botao">Iniciar Sessão</a>
	</div>
	<div id="corpo-form">
		
		<img src="img/Flex.png" class="Logo">
		<h1>Criar Conta</h1>

		<form action="POST">
			<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
			<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
			<input type="email" name="email" placeholder="Email" maxlength="40">
			<input type="password" name="senha" placeholder="senha" maxlength="15">
			<input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="15">
			<input id="Bot" type="submit" value="REGISTAR">

		</form>
	</div>
</div>

<?php



?>
    
</body>
</html>
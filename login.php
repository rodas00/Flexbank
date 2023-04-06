<?php
session_start();
require_once "db.php";
if(isset($_SESSION['user_id'])!="") {
header("Location: dashboard.php");
}
if (isset($_POST['login'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['senha']);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}  
$result = mysqli_query($conn, "SELECT * FROM utilizadores WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['user_id'] = $row['uid'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];
$_SESSION['user_mobile'] = $row['mobile'];
header("Location: dashboard.php");
} 
}else {
$error_message = "Incorrect Email or Password!!!";
}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

<div id="container">
    <div id="corpo-text">
		<h1>Olá, é novo?</h1>
		<h3>crie ja uma conta connosco</h3>
		<a href="registo.php" id="botao">Registar</a>
	</div>
	<div id="corpo-form">
		
		<img src="img/Flex.png" class="Logo">
		
		<form id="for" action="POST">
			<h1>Iniciar Sessão</h1>

			<input type="email" name="email" placeholder="Email" maxlength="40">
			<input type="password" name="senha" placeholder="senha" maxlength="15">
			<input id="Bot" type="submit" value="Entrar">

		</form>
	</div>
</div>
    
</body>
</html>
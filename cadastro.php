<?php	
	session_start();
	include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>	
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
	?>

	<form method="POST" action="processa.php">
		<label>Nome: </label>
		<input type="text" name="nome" placeholder="Digite seu nome"><br><br>
		<label>Email: </label>
		<input type="email" name="email" placeholder="Digite seu email"><br><br>
		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Digite sua senha(números)"><br><br>	
		
		<input type="submit" value="cadastrar">
		


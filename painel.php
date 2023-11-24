<?php
	/*if(!isset($_SESSION)){
		session_start();
	}*/
	include("protecao.php");
?>

<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<title> PAINEL </title>
	<body>
		<h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>
		colocar aqui o forms dos livros
		
		<p>
			<a href="logout.php"> Sair</a>
			<a href="cadastro.php"> cadastrar outro professor</a>
		</p>
		
	</body>
</head>
</html>
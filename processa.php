<?php
	session_start();
	include("conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha');
	
		$result_usuario = "INSERT INTO usuario (email, senha, nome) VALUES ('$email','$senha','$nome')";
		$resultado_usuario = mysqli_query($conn,$result_usuario);
	
			if(mysqli_insert_id($conn)){
				$_SESSION['msg'] = "<p style='color: green;'>Cadastrado com sucesso</p>";
				header("location: cadastro.php");
			}else{
				$_SESSION['msg'] = "<p style='color: red;'>Cadastrado com sucesso</p>";
				header("location: cadastro.php");
			}
			
			header("Location: index.php");
?>
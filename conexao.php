<?php
	$usuario = "sql10665919";
	$senha = "mgzxDa5Pv5";
	$database = "sql10665919";
	$host = "sql10.freesqldatabase.com";
	 
	
		$mysqli = new mysqli($host, $usuario, $senha,$database);
		
			if($mysqli->error) {	
				die("falhou: " . $mysqli->error);
				
			}
			
		/* Conexão caso tenha o cadastr:( */	
			
	$usuario = "sql10665919";
	$senha = "mgzxDa5Pv5";
	$database = "sql10665919";
	$host = "sql10.freesqldatabase.com";
	 
	
		$conn = mysqli_connect($host, $usuario, $senha,$database);

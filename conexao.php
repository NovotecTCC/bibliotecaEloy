<?php
	$usuario = "sql10660694";
	$senha = "MTZU1QeAI3";
	$database = "sql10660694";
	$host = "sql10.freesqldatabase.com";
	 
	
		$mysqli = new mysqli($host, $usuario, $senha,$database);
		
			if($mysqli->error) {	
				die("falhou: " . $mysqli->error);
				
			}
			
			$usuario = "sql10660694";
	$senha = "MTZU1QeAI3";
	$database = "sql10660694";
	$host = "sql10.freesqldatabase.com";
	 
	
		$conn = mysqli_connect($host, $usuario, $senha,$database);

<?php
	$nome_banco_dados = "metodologias_ageis";
	$host = "localhost";
	$usuario = "root";
	$senha = "root";
	
	// conecta no banco de dados
	mysql_connect($host, $usuario, $senha) or 
		die("Não conectou no banco de dados");
	
	// seleciona o banco de dados de interesse
	mysql_select_db($nome_banco_dados) or 
		die("Nã selecionou banco de dados");
?>
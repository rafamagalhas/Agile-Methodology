<?php
	require("config.inc.php");

	$nome = $_POST["tNome"];
	$cnpj = $_POST["tCnpj"];
	$mail = $_POST["tMail"];
	$fone = $_POST["tFone"];
	$msg  = $_POST["tMsg"];
	$ped  = $_POST["tPed"];
	if ($ped == "on")
		$ped = true;
	else 
		$ped = false;
							
	$query = "INSERT INTO contato (nome, cnpj, email, fone, mensagem, receber_msg) VALUES ";

	$query = $query . "('".$nome."',";
	$query = $query . "'".$cnpj."',";
	$query = $query . "'".$mail."',";
	$query = $query . "'".$fone."',";
	$query = $query . "'".$msg."',";
	$query = $query . "'".$ped."')";
	
	$resultado = mysql_query($query);
	echo "<h1>";
	if ($resultado == 1)
		echo "Inserção com sucesso";
	else
		echo "Não foi possível inserir";
	echo "</h1>";

	$consulta = mysql_query("select id_contato from contato where cnpj = '" . $cnpj . "'");
	while ($linha = mysql_fetch_row($consulta)){ //alimento um arry com o retorno do select
		$id = $linha[0];
	}
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=_movimentacao/exibir.php?id_contato=" . $id . "'/>";
?>
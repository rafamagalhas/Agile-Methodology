<?php
	require("config.inc.php");

	$id   = $_GET["id_contato"];
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
							
	$query = "UPDATE contato set nome='" . $nome . "', cnpj='" . $cnpj . "', email='" . $mail . "', fone='" . $fone . "',";
	$query = $query . "mensagem='" . $msg . "', receber_msg=" . $ped . " where id_contato=" . $id;

	
	$resultado = mysql_query($query);
	echo "<h1>";
	if ($resultado == 1)
		echo "Inserção com sucesso";
	else
		echo "Não foi possível inserir";
	echo "</h1>";
	echo $id;
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=_movimentacao/exibir.php?id_contato=" . $id . "'/>";
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Remover Registro</title>
</head>
<body>
<?php
		require("../config.inc.php");
		
		$id = $_GET["id_contato"];

		$query = "delete from contato where id_contato = '" . $id . "'";
		$resultado = mysql_query($query);
		if ($resultado > 0){
			echo "<h1> Remoção com sucesso </h1>";
		}
		else {
			echo "<h1> Remoção com problemas </h1>";
		}
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=listar.php'/>";
?>
</body>
</html>

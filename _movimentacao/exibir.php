<?php
	require("../config.inc.php");
	
	$id = $_GET["id_contato"];
	$consulta = mysql_query("select * from contato where id_contato = '" . $id . "'");
	while ($linha = mysql_fetch_row($consulta)){ //alimento um arry com o retorno do select
		$id   = $linha[0];
		$nome = $linha[1];
		$mail = $linha[2];
		$cnpj = $linha[3];
		$fone = $linha[4];
		$msg  = $linha[5];
		$ped  = ($linha[6] == 1)? "checked": "";
	}
?>
<html lang='pt-br'>
<head>
	<meta charset="UTF-8" />
	<title>Metodologias Ágeis</title>
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../_css/form.css" />
	<link rel="stylesheet" type="text/css" href="../_css/movimentacao.css" />
</head>
<script language="javascript" src="../_javascript/movi.js"> </script> 
	<body>
		<div id="interface">
			<header id="cabecalho">
			<hgroup> 	
				<h1>Metodológias Ágies</h1>
				<h2>Uma nova forma de desenvolver software</h2>
			</hgroup>
			<img id="icone" src="../_imagens/contato.png" />
			</header>	
			<section id="corpo-full">
				<article id="noticia-principal">
					<header id="cabecalho-artigo">
						<hgroup>
							<h3>Tecnologia > &nbsp; Metodologias > &nbsp; Manutenção dos Dados</h3>
							<h1>Exibindo Contato</h1>
							<h2>Por MPB<h2>
							<h3 class="direita"> Atualizado em Setembro/2014</h3>
						</hgroup>
					</header>
					<form method="post" id="dados-exibir" action="listar.php">
						<fieldset id="dados" ><legend>Dados do Contato</legend>
							<div id="dados">
								<h3>Nome:</h3>
									<p><?php echo $nome; ?></p>
								<h3>Email:</h3>
									<p><?php echo $mail; ?></p>
								<h3>Cnpj:</h3>
									<p><?php echo $cnpj; ?></p>
								<h3>Fone:</h3>
									<p><?php echo $fone; ?></p>
								<h3>Msg:</h3>
									<p><?php echo $msg; ?></p>
							</div>
							<input type="submit" id="cVoltar" value="Voltar" />
							<input type="submit" id="cEditar" value="Editar" onclick="sendForm('<?php echo $id; ?>')" />
						</fieldset>
					</form>
				</article>
			</section>
			<footer id="rodape"> 
				<p>
				Copyright 2014 - by MPB <br/> 
				<a href="http://www.fatecfranca.edu.br/" target="_blank">Fatec Franca</a>
				</p>
			</footer>
		</div>
	</body>
</html>
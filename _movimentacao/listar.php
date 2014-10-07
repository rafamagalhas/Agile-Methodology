<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="UTF-8" />
	<title>Metodologias Ágeis</title>
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../_css/form.css" />
	<link rel="stylesheet" type="text/css" href="../_css/movimentacao.css" />
</head>
	<script language="javascript" src="_javascript/funcoes.js"> </script>
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
							<h1>Listando Contatos</h1>
							<h2>Por MPB<h2>
							<h3 class="direita"> Atualizado em Setembro/2014</h3>
						</hgroup>
					</header>
				<?php
					require("../config.inc.php");

					echo "<table id='tabela-php'>";
					echo "<tr>";
					echo "<th>Nome</th><th>Email</th><th>CNPJ</th><th>Ações</th>";
					echo "</tr>";
					$consulta = mysql_query("select * from contato");
					while ($linha = mysql_fetch_row($consulta)){ // para cada linha de retorno do select
						echo "<tr>";
						echo "<td class='ln'>" . $linha[1] . "</td>";
						echo "<td class='ln'>" . $linha[2] . "</td>";
						echo "<td class='ln'>" . $linha[3] . "</td>";
						echo "<td class='ac'>
								<a href=\"exibir.php?id_contato=" . $linha[0] . "\">" . "Exibir" . "</a>
								<a href=\"editar.php?id_contato=" . $linha[0] . "\">" . "Editar" . "</a>
								<a href=\"remover.php?id_contato=" . $linha[0] . "\">" ."Remover" . "</a></td>";					
						echo "</tr>";
					}
					echo "</table>";
				?>
				<form method="post" id="fVoltar" action="../index.html">
					<input type="submit" name="tVoltar" id="cVoltar" value="Voltar" />
				</form>
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
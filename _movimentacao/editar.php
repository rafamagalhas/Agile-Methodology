<?php
	require("../config.inc.php");
	
	$id = $_GET["id_contato"];
	$consulta = mysql_query("select * from contato where id_contato = '" . $id . "'");
	while ($linha = mysql_fetch_row($consulta)){ //alimento um arry com o retorno do select
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
					<h1>Editando Contato</h1>
					<h2>Por MPB<h2>
					<h3 class="direita"> Atualizado em Setembro/2014</h3>
					</hgroup>
				</header>
				
				<form method="post" id="dados-atualizar" action="listar.php">
					<fieldset id="dados" ><legend>Identificação do Contato</legend>
						<p><label for="cNome">Nome:</label>
						<input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo" value="<?php echo $nome; ?>"/>	
						</p>
						<p><label for="cCnpj">CNPJ:</label> 
						<input type="text" name="tCnpj" id="cCnpj" size="14" maxlength="14" placeholder="Cnpj" value="<?php echo $cnpj; ?>"/> 
						</p>
						<p><label for="cMail">Email:</label>
						<input type="email" name="tMail" id="cMail" size="20" maxlength="40" placeholder="Email" value="<?php echo $mail; ?>"/>
						</p>
						<p><label for="cFone">Fone:</label>
						<input type="text" name="tFone" id="cFone" size="14" maxlength="14" placeholder="(xx)00000-0000" value="<?php echo $fone; ?>"/>
						</p>
						<p><label for="cMsg">Mensagem:</label>
						<textarea name="tMsg" id="cMsg" cols="50" rows="5" placeholder="Deixa aqui sua mensagem"><?php echo $msg; ?></textarea>
						</p>
						<p>
						<input type="checkbox" name="tPed" id="cPed" <?php echo $ped; ?>>
						<label for="cPed">Gostaria de receber atualizações?</label>
						</p>
					</fieldset>
					<input type="submit" value="Voltar" name="tVoltar" id="cVoltar" />
					<input type="submit" value="Salvar" name="tSalvar" id="cSalvar" onclick="atualizaForm('<?php echo $id; ?>')" />
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

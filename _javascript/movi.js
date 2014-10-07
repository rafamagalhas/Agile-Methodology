function sendForm(id){
	document.getElementById("dados-exibir").action = "editar.php?id_contato=" + id;
	document.getElementById("dados-exibir").submit();
}

function atualizaForm(id){
	document.getElementById("dados-atualizar").action = "../atualizar.php?id_contato=" + id;
	document.getElementById("dados-atualizar").submit();
}
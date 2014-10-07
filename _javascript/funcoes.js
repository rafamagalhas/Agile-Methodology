function mudaFoto(foto){
	document.getElementById("icone").src = foto;
}

function listForm(){
	document.getElementById("fContato").action = "_movimentacao/listar.php";
	document.getElementById("fContato").submit();
}
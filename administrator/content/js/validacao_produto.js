function validacao(){
var cod_barras =  Math.floor(Math.random() * 1065466545487);
    document.getElementById('cod_barras').value = cod_barras;
	
if(document.produto.codigo.value=="" || document.produto.codigo.value.length < 3){
	alert( "Preencha o campo C\u00d3DIGO corretamente! M\u00ednimo 3 digitos" );
	document.produto.codigo.focus();
		return false;
}

if(document.produto.nome.value=="" || document.produto.nome.value.length < 3){
	alert( "Preencha o campo NOME corretamente! M\u00ednimo 3 digitos" );
	document.produto.nome.focus();
		return false;
}

if(document.produto.preco_custo.value== null || document.produto.preco_custo.length <3 ) {
	alert("Preencha o campo PRE\u00c7O DE CUSTO corretamente! Não pode ser menor ou igual a zero")
	document.produto.preco_custo.focus();
		return false;
}

if(document.produto.preco_venda.value== null || document.produto.preco_venda.length <3 ) {
	alert("Preencha o campo PRE\u00c7O DE VENDA corretamente! Não pode ser menor que 1 ou igual a zero")
	document.produto.preco_venda.focus();
		return false;
}	
	
if(document.produto.marca.value=="" || document.produto.marca.value.length < 3){
	alert( "Preencha o campo MARCA corretamente! M\u00ednimo 3 digitos" );
	document.produto.marca.focus();
		return false;
}
		
if(document.produto.qtd.value=="" || document.produto.qtd.length <3 ) {
	alert("Preencha o campo QUANTIDADE corretamente! N\u00e3o pode ser menor que 1 ou igual a zero")
	document.produto.qtd.focus();
		return false;
}	

if(document.produto.fornecedor.value=="" || document.produto.fornecedor.length <3 ) {
	alert("Preencha o campo FORNECEDOR corretamente! M\u00ednimo 3 digitos")
	document.produto.fornecedor.focus();
		return false;
}			
		
return true;
}


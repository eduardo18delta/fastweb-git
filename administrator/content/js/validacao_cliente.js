function validacao(){

var cpf	= document.cliente.cpf.value
cpf = cpf.replace(/[^\d]+/g,''); 
if(document.cliente.codigo.value=="" || document.cliente.codigo.value.length < 3){
	alert( "Preencha o campo C\u00d3DIGO corretamente! M\u00ednimo 3 digitos" );
	document.cliente.codigo.focus();
		return false;
}

if(document.cliente.nome.value=="" || document.cliente.nome.value.length < 3){
	alert( "Preencha o campo NOME corretamente! M\u00ednimo 3 digitos" );
	document.cliente.nome.focus();
		return false;
}

if(document.cliente.cep.value.length <6 ){
alert( "Preencha campo CEP corretamente!" );
document.cliente.cep.focus();
return false;
}

if(document.cliente.endereco.value.length <6 ){
alert( "Preencha campo ENDERE\u00c7O corretamente!" );
document.cliente.endereco.focus();
return false;
}

if(document.cliente.bairro.value.length <6 ){
alert( "Preencha campo BAIRRO corretamente!" );
document.cliente.bairro.focus();
return false;
}

if(document.cliente.cidade.value.length <6 ){
alert( "Preencha campo CIDADE corretamente!" );
document.cliente.cidade.focus();
return false;
}

if(document.cliente.rg.value.length <6 ){
alert( "Preencha campo RG corretamente!" );
document.cliente.rg.focus();
return false;
}

if (validaCPF(cpf) == false) {
alert("CPF inválido");
document.cliente.cpf.focus();
return false;
}


if(document.cliente.telefone.value.length <6 ){
alert( "Preencha campo TELEFONE corretamente!" );
document.cliente.telefone.focus();
return false;
}

if(document.cliente.celular.value.length <6 ){
alert( "Preencha campo CELULAR corretamente!" );
document.cliente.celular.focus();
return false;
}

if( document.cliente.email_pe.value== "" || document.cliente.email_pe.value.indexOf('@')==-1 || document.cliente.email_pe.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL PESSOAL corretamente!" );
document.cliente.email_pe.focus();
return false;
}

if( document.cliente.email_pro.value== "" || document.cliente.email_pro.value.indexOf('@')==-1 || document.cliente.email_pro.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL PROFISSIONAL corretamente!" );
document.cliente.email_pro.focus();
return false;
}

if(document.cliente.profissao.value.length <6 ){
alert( "Preencha campo PROFISS\u00c3O corretamente!" );
document.cliente.profissao.focus();
return false;
}


return true;
}



function validaCPF(cpf) {
			    if(cpf == '') {
			    	return false;
			    
			    }

			    // Elimina CPFs invalidos conhecidos    
			    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999") {
			    	alert("CPF inválido!"); 

			        return false;       
			    }

			    //valida primeiro dígito
			    totalDeSomaDeMultiplicaoDigito1 = 0;    
			    for (i=0; i < 9; i ++) {
			        totalDeSomaDeMultiplicaoDigito1 += parseInt(cpf.charAt(i)) * (10 - i);
			    }       
			    digito1 = 11 - (totalDeSomaDeMultiplicaoDigito1 % 11);  
			    if (digito1 == 10 || digito1 == 11) {
			        digito1 = 0;    
			    }     
			    if (digito1 != parseInt(cpf.charAt(9))) {
			    	    
			        return false;       
			    }

			    //valida segundo dígito 
			    totalDeSomaDeMultiplicaoDigito2 = 0;    
			    for (i = 0; i < 10; i ++) {
			        totalDeSomaDeMultiplicaoDigito2 += parseInt(cpf.charAt(i)) * (11 - i);
			    }       
			    digito2 = 11 - (totalDeSomaDeMultiplicaoDigito2 % 11);  
			    if (digito2 == 10 || digito2 == 11) {
			        digito2 = 0;    
			    }
			    if (digito2 != parseInt(cpf.charAt(10))) {
			    	 
			        return false;       
			    }
			    
		    }

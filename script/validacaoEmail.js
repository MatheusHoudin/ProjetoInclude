function validacaoEmail(email){
	var usuario = email.value.substring(0,email.value.indexOf("@"));
	var dominio = email.value.substring(email.value.indexOf("@")+1,email.value.length);

	if((usuario.length >=1)&&
		(dominio.length >=3)&&
		(usuario.search("@") == -1) &&
		(dominio.search("@") == -1) &&
		(usuario.search(" ")==-1) && 
    	(dominio.search(" ")==-1) &&
   		(dominio.search(".")!=-1) &&      
    	(dominio.indexOf(".") >=1)&& 
    	(dominio.lastIndexOf(".") < dominio.length - 1)) {
	}else{
		document.getElementById("test").innerHTML.requestfocus;
		alert("E-mail invalido");
	}
}

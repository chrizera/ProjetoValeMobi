function validar(){
 var check = true;
 var numIntPositivo = /^\d+$/;
 var numDecimal = /^\d{1,3}(\.\d{3})*\,\d{2}$/;
 var padraoPalavra = /^[a-zA-Z\s]*$/;
 
 if(codMerc.value == "" || !numIntPositivo.test(codMerc.value)){
	 codMerc.style.border = "1px solid red";
	 check = false;
	}
 else {
	 codMerc.style.border = "1px solid silver";
 }
 
 if(tipoMerc.value == "" || !padraoPalavra.test(tipoMerc.value)){
	 tipoMerc.style.border = "1px solid red";
	 check = false;
 }
 else {
	 tipoMerc.style.border = "1px solid silver";
	 
 }
 
 if(nomeMerc.value == "" || !padraoPalavra.test(nomeMerc.value)){
	 nomeMerc.style.border = "1px solid red";
	 check = false;
 } 
 else {
	 nomeMerc.style.border = "1px solid silver";
	 
 }
 
 if(quant.value == "" || !numIntPositivo.test(quant.value)){
	 quant.style.border = "1px solid red";
	 check = false;
 }
 else {
	 quant.style.border = "1px solid silver";
	 
 }
 
 /*OBS: SÓ ACEITA NO FORMATO XX,XX*/
 if(preco.value == "" || !numDecimal.test(preco.value)){
	 preco.style.border = "1px solid red";
	 check = false;
 }
 else {
	 preco.style.border = "1px solid silver";
	 
 }
 
 if(tipoNegocio.value == ""){
	  tipoNegocio.style.border = "1px solid red";
	  check = false;
 }
 else {
	  tipoNegocio.style.border = "1px solid silver";
	  
 }
  
 return check;
}

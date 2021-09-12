
 
 function validarEmail(miID) {
 	var patron,infoform,text;
	patron =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	infoform = document.getElementById(miID).value;
     if ( !patron.test(infoform) ){
	 text = ("*");
	 
	}
	else {
		text = "";
       
    } 
     document.getElementById("error2").innerHTML = text;
      
 }

 


 function validarcontra(miID){
	 var expresion, info, texto, expresion2;
	 expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

	 info = document.getElementById(miID).value;
	 if ((!expresion.test(info))){
		 text =("*");
		 
	 }
	 else{
	 	    text="";
			
		}
	     document.getElementById("error3").innerHTML =text;
	      
 }

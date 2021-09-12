C_Error= '#FF0000'
C_Edicion=' #DCDCDC '
FONDO = '#FFFFFF'


  
 function errorColor(miID){
	var x;	

	x=document.getElementById(miID)
	x.classList.remove("white");
	x.classList.remove("red");
	x.classList.toggle("red");
	if (x.classList==""){
			console.log("no hay color   ");

	}
	console.log("removi blanco   ");
 }
 
 function normalColor(miID){
	var x;	
	x=document.getElementById(miID);
	x.classList.remove("red");
	x.classList.remove("white");
	x.classList.toggle("white");
	console.log("removi rojo   ");
 }

 
 function validarEmail(miID) {
 	var patron,infoform,text;
	patron =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	infoform = document.getElementById(miID).value;
     if ( !patron.test(infoform) ){
	 text = ("*");
	 errorColor(miID);
	}
	else {
		text = "";
        normalColor(miID);
    } 
     document.getElementById("error2").innerHTML = text;
      validartodo();
 }

 function validarnombre(miID){
	 var expresion, info, texto, expresion2;
	 expresion = /^[a-zA-Z]+$/;
	 expresion2 = /\s/;
	 info = document.getElementById(miID).value;
	 if ((!expresion.test(info)) || (expresion2.test(info))){
		 text =("*");
		 errorColor(miID);
	 }
	 else{
	 	    text="";
			normalColor(miID);
		}
	     document.getElementById("error5").innerHTML =text;
	      validartodo();
 }


 function validarcontra(miID){
	 var expresion, info, texto, expresion2;
	 expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

	 info = document.getElementById(miID).value;
	 if ((!expresion.test(info))){
		 text =("*");
		 errorColor(miID);
	 }
	 else{
	 	    text="";
			normalColor(miID);
		}
	     document.getElementById("error3").innerHTML =text;
	      validartodo();
 }

  function validarcontra2(miID){
	 var expresion, info, texto, expresion2;
	 expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

	 info = document.getElementById(miID).value;
	 info2= document.getElementById('contrasena').value;
	 if ((!expresion.test(info))|| info!=info2){
		 text =("*");
		 errorColor(miID);
	 }
	 else{
	 	    text="";
			normalColor(miID);
		}
	     document.getElementById("error4").innerHTML =text;
	      validartodo();
 }
function reset() {
  document.getElementById("myForm").reset();
}
		
 function validartodo()
 {
 	var x;var i;var y;var cond=0;var z;
 	y=document.getElementById("submit");
 	z=document.getElementsByTagName("input");
 	x=document.getElementsByClassName("error");

 	for (i=0;i<x.length; i++)
 	{
 		
 		if (x[i].innerHTML.length != 0 || z[i].value=='')		
 		{
 			cond=1;
 			


 		}
 	
 	}

 	if(cond==1)
 	{
 		y.style.display = "none"
 		y.style.visibility = "hidden"

 		for (i=0;i<z.length; i++)
 		{


 			if (z[i].value=='')		
 		{	z[i].classList.remove("red");
 			z[i].classList.remove("white");
 			z[i].classList.toggle("red");
 			x[i].innerHTML="*";

 		}

 		}
 	}
 	else
 	{
 		console.log("entre");
 		y.style.display = "inline-block"
 		y.style.visibility = "visible"
 	}

 }
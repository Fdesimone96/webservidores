

function borrar ()
{
  var x = document.getElementsByClassName("preCar")[0].innerHTML;
  if(confirm("Esta seguro que desea eliminar?"))
  {
    this.remove();
    calcularTotal(-x);
  }

}
function calcularTotal (precio){
  var num;var total;
  var num=parseInt(precio)
   var total=document.getElementById("tot").innerText;
   var total=parseInt(total);
   var res = total+num;
   if(res>=0)
   document.getElementById("tot").innerHTML =total+num;
   else
    document.getElementById("tot").innerHTML =0;
}
function agregarAlCarrito(index){
  /*var nombre = document.getElementById("nom2").innerHTML;
  var precio = document.getElementById("pre2").innerText;
  */
  var nombre = document.getElementsByClassName("nomCaracteristicas")[index].innerHTML;
  var precio = document.getElementsByClassName("preCaracteristicas")[index].innerHTML;
  var div1 = document.createElement("div");
  var nomsinetiqueta = nombre.replace(/<[^>]*>?/g, '');
  var presinetiqueta = precio.replace(/<[^>]*>?/g, '');
  var nom1 = document.createTextNode(nomsinetiqueta);
  var pre1 = document.createTextNode(presinetiqueta);
  var div2 = document.createElement("div");
  var eli = document.createElement("button");
  eli.classList.add("btoncito");
  eli.textContent = "X";

  div1.addEventListener('click', borrar);
  eli.classList.add("btoncito");
  div2.appendChild(nom1);
  div2.classList.add("preNom");
  var div3 = document.createElement("div");
  div3.classList.add("preCar");
  div3.appendChild(pre1);
  div1.classList.add("producto");
  div1.appendChild(div2);
  div1.appendChild(div3);
  div1.appendChild(eli);
  document.getElementById("carrito").appendChild(div1);

  calcularTotal(presinetiqueta);
}

function noScroll() {
  window.scrollTo(0, 0);
}


function openForm() {
  document.getElementById("formTarjeta").style.display = "block";
  window.addEventListener('scroll', noScroll);
}

function closeForm() {
  document.getElementById("formTarjeta").style.display = "none";
  window.removeEventListener('scroll', noScroll);
}



// Aca va la validacion de Tarjeta

C_Error= '#FF0000'
C_Edicion=' #DCDCDC '
FONDO = '#FFFFFF'



 function errorColor(miID){
	var x;

	x=document.getElementById(miID)
	x.classList.remove("blanco");
	x.classList.remove("rojo");
	x.classList.toggle("rojo");
	if (x.classList==""){
			console.log("no hay color   ");

	}
	console.log("removi blanco   ");
 }

 function normalColor(miID){
	var x;
	x=document.getElementById(miID);
	x.classList.remove("rojo");
	x.classList.remove("blanco");
	x.classList.toggle("blanco");
	console.log("removi rojo   ");
 }

function validarApellido(miID)
{
  var x = document.getElementById(miID).value;
  var er = /^[A-Z]+$/i;
  if(!er.test(x)){

    errorColor(miID)
  }
  else {
    if(x.length>=3)
    normalColor(miID);
  }
  validarTodo();
}

function validarNumeroTarjeta(miID)
{
  var x = document.getElementById(miID).value;
  var er = /^4\d{3}-?\d{4}-?\d{4}-?\d{4}$/;
  if(!er.test(x)){
    errorColor(miID)
  }
  else {
    normalColor(miID);
  }
  validarTodo();
}
function validarCVV(miID)
{
  var x = document.getElementById(miID).value;
  if(x >=100 && x<=999)
  {
    normalColor(miID)
  }
  else {
    errorColor(miID);
  }
  validarTodo();
}

function validarTodo()
{
  var x, y;
  x=document.getElementsByClassName("blanco");
  y=document.getElementById("submit");
/*  if(x[0]==null || x[1]==null)
  {
      y.classList.add("deshabilitado");
  }
  else {
    y.classList.remove("deshabilitado");
  }
  */
  if(x[0]==null || x[1]==null || x[2]==null)
  {
    y.disabled=true;
  }
  else{
    y.disabled=false;
  }
}

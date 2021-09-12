function eliminar(name)
{

  var xhr = new XMLHttpRequest();
xhr.open("POST", '../php/eliminar(carrito).php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
    }
}
xhr.send("q="+name);
}






function Startsession(name){
  var xhr = new XMLHttpRequest();
xhr.open("POST", '../php/sessions2.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
    }
}
xhr.send("q="+name);
// xhr.send(new Int8Array());
// xhr.send(document);



}
function borrar (index)
{
    var i = 0;
    var x ;
    while(x = document.getElementsByClassName("preCar")[i].innerHTML!=index)
    {
      i++;
    }
    var id = document.getElementsByClassName("idCar")[i].innerHTML;
    var idsinetiqueta = id.replace(/<[^>]*>?/g, '');
    if(confirm("esta seguro?"))
    {

      x = document.getElementsByClassName("preCar")[i].innerHTML;
      var presinetiqueta = x.replace(/<[^>]*>?/g, '');
      alert(presinetiqueta);
      negativo = parseInt(presinetiqueta);
      calcularTotal(-1*negativo);

         x = document.getElementsByClassName("producto")[i];
      x.remove();
    }
    alert(idsinetiqueta);
    eliminar(idsinetiqueta);

}
function calcularTotal (precio){
  var num;var total;
  var num=parseInt(precio)
  console.log("este numero es: "+num);
   var total=document.getElementById("tot").innerText;
   var total=parseInt(total);
   var res = total+num;
   if(res>=0)
   document.getElementById("tot").innerHTML =total+num;
   //else
    //document.getElementById("tot").innerHTML =0;
}
function agregarAlCarrito(index){
  /*var nombre = document.getElementById("nom2").innerHTML;
  var precio = document.getElementById("pre2").innerText;
  */
  var id = document.getElementsByClassName("idCaracteristicas")[index].innerHTML;
  var precio = document.getElementsByClassName("preCaracteristicas")[index].innerHTML;
  var div1 = document.createElement("div");
  var idsinetiqueta = id.replace(/<[^>]*>?/g, '');
  var presinetiqueta = precio.replace(/<[^>]*>?/g, '');
  var id1 = document.createTextNode(idsinetiqueta);
  var pre1 = document.createTextNode(presinetiqueta);
  var div2 = document.createElement("div");
  var eli = document.createElement("button");
  eli.classList.add("btoncito");
  eli.textContent = "X";
  //Este es el ajax, que une php con js.

  Startsession(idsinetiqueta);
  // Aca termina

  div1.addEventListener("click", function (){borrar(presinetiqueta)});
  eli.classList.add("btoncito");
  div2.appendChild(id1);
  div2.classList.add("idCar");
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
 if(x[0]==null || x[1]==null)
  {
      y.classList.add("deshabilitado");
  }
  else {
    y.classList.remove("deshabilitado");
    y.disabled = false;
  }


}

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
  div2.classList.add("preNom");
  div2.appendChild(nom1);
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

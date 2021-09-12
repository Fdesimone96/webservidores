
function eliminar1(){
 var xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/eliminarcuenta.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send();
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        window.location.href='../html/index.php';
    }
}
}
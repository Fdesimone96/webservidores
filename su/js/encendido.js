function encendido(y,z){
  var xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/encender.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("id_servidor="+y+"&"+"estado="+z);
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
         location.reload(true);
    }
    }
}


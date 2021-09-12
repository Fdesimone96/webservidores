
function eliminar(id){
 var xhr = new XMLHttpRequest();
  var x = document.getElementById("showCustomer");
  xhr.open("POST", '../php/eliminar.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send('q='+id);
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
        location.reload(true);
    }
}
}

function Startsession2(){
  var xhr = new XMLHttpRequest();
  var x = document.getElementById("showCustomer");
  xhr.open("POST", '../php/sessions.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("q="+x.value);
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
    }
}

}
function showCustomer2( ) {
  var xhr = new XMLHttpRequest();
  var x = document.getElementById("showCustomer");
  xhr.open("POST", '../php/option.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        document.getElementById("showCustomer").innerHTML =this.responseText;
    }
}
xhr.send();
}





function loadDoc(){
 var xhr = new XMLHttpRequest();
  var x = document.getElementById("showCustomer");
  xhr.open("POST", '../php/blogfeed.php', true);

//Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send();
xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        document.getElementById("post").innerHTML =this.responseText;
    }
}
}
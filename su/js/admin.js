function admin() {
var xhr = new XMLHttpRequest();
 xhr.open("POST", '../php/admin.php', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
     cond=this.responseText;
     console.log(cond);
     if (cond==false){
     	var y=document.getElementsByName("adm")[0].style.visibility = "hidden";
     	var y=document.getElementsByName("adm")[0].style.display = "none";



     }
     else{
     	var y=document.getElementsByName("adm")[0].style.visibility = "visible";


     }
    }
  };
  
}
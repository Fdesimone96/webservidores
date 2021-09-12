<?php
    
 
 function crear($value){ 
   if(session_id() == ''){
    session_unset();
    session_start();
    $_SESSION['emailmandar'] =$value;
}


else{
session_destroy();
 crear();
}
}
$q=$_POST['q'];
crear($q);
echo $_SESSION['emailmandar'] ;




?>
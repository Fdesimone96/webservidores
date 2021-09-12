<?php
    
session_start();
$q=$_REQUEST['q'];
if(empty($_SESSION['compra'])){

	$_SESSION['compra']=array();

}
array_push($_SESSION['compra'],$q);
for ($i=0;$i<count($_SESSION['compra']);$i++){


	echo $_SESSION['compra'][$i];


} 





?>
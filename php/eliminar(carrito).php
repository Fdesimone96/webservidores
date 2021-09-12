<?php

session_start();
$q=$_REQUEST['q'];
$i=0;
$j=0;
$aux2=  array();
echo $q;
while($i<count($_SESSION['compra']))
{
	if($_SESSION['compra'][$i]==$q && $j<1 )
{
	$j++;
}
	else
	{
		array_push($aux2,$_SESSION['compra'][$i]);
	}

	$i++;

}

		print_r($aux2);
		unset($_SESSION['compra']);
		$_SESSION['compra']=$aux2;
		
?>
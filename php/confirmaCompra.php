<?php
session_start();
$mail = $_SESSION['email'];
$conexion=mysqli_connect('localhost','root','','servidores1');
$precios=array();
$i=0;
$cvv=$_POST['cvv'];
$fecha=$_POST['fecha'];
$numerotarjeta=$_POST['numeroTarjeta'];
if (empty($cvv)||empty($fecha)||empty($numerotarjeta))
{		

		header('Location:../html/comprar2.php?error=vacio');

}
if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$fecha))
{		
	echo " fecha ".$fecha;
		header('Location:../html/comprar2.php?error=FECHA');
		

}
if (!preg_match("/^[0-9]{3}$/",$cvv))
	echo $cvv;
header('Location:../html/comprar2.php?error=CVV');
{

		
}
if (!preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35d{3})d{11})$/",$numerotarjeta))

{		header('Location:../html/comprar2.php?error=tarjeta');
		
}
if(isset($_SESSION['compra'])){
while($i<count($_SESSION['compra']))
{
 $idaux=$_SESSION['compra'][$i];
 $sql = "SELECT precio from servidor WHERE id_servidor=$idaux";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   array_push($precios,$row['precio']);
  }
}
$i++;
}
$i=0;
print_r($_SESSION['compra']);
print_r($precios);
while($i<count($_SESSION['compra']))
{
$auxpre=$precios[$i];
$auxid=$_SESSION['compra'][$i];
$consulta= "INSERT INTO compra (id_compra, precio, id_servidor,Email,tarjeta,cvv) VALUES (NULL, $auxpre, $auxid , '$mail',$numerotarjeta,$cvv)";
if ($conexion->multi_query($consulta) === TRUE) {
  echo "compra Creada :D  ";
  header("Location:../html/comprar2.php?compra=existosa");
} 
else{
	echo "Error 404 NO FOUND ";
}
$i++;	
}
}
else{

	header("Location:../html/comprar2.php?compra=comprealgo");	

}

?>

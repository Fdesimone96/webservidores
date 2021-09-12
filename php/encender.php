<?php

$servername ="localhost";
$username1 ="root";
$password ="";
$dbname ="servidores1";
// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
$p=$_REQUEST['id_servidor'];
$q=$_REQUEST['estado'];
if($q=='Apagado'){
$sql="UPDATE servidor SET Encendido = 'Encendido' WHERE servidor.id_servidor = $p ;";
}
else{
$sql="UPDATE servidor SET Encendido = 'Apagado' WHERE servidor.id_servidor = $p ;";
}
$result = $conn->query($sql);
if ($conn->multi_query($sql) === TRUE){

		echo $q;

}
?>

<?php
$servername ="localhost";
$username1 ="root";
$password ="";
$dbname ="servidores1";
// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
session_start();
$q=$_REQUEST['q'];
$sql="DELETE FROM compra WHERE compra.id_compra = $q;";
$result = $conn->query($sql);
if ($conn->multi_query($sql) === TRUE){

		echo $q;

}

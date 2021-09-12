<?php
session_start();
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "servidores1";
// Create connection
$mail=$_SESSION['email'];
$conn = new mysqli($servername, $username1, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM usuario WHERE usuario.Email = '$mail';";
$result = $conn->query($sql);
if ($conn->multi_query($sql) === TRUE){

		echo $mail;

}



$conn->close();
?>


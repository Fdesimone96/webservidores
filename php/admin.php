<?php
session_start();
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "servidores1";
$tipo=0;
// Create connection
$mail=$_SESSION['email'];
$conn = new mysqli($servername, $username1, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tipo FROM usuario WHERE Email='$mail'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = $result->fetch_assoc()) {
    $tipo=$row["tipo"];
  }
  }
 if ($tipo==0)
 {

 	echo false;

 }
 else
 {

 	echo true;
 }


$conn->close();
?>


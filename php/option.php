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

$sql = "SELECT Email FROM usuario ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  	
  echo " <option id= 'elije usuario'> Elija usuario </option>";
 while($row = $result->fetch_assoc()) {
    echo " <option id=". $row["Email"].">" . $row["Email"]. "</option>";
  }
  }


$conn->close();
?>


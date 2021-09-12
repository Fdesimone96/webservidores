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

$sql = "SELECT * FROM feeds WHERE  Email ='$mail'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "". $row["feed"]. " - Email: " . $row["Email"]. "<br>";
  }
  }


$conn->close();
?>


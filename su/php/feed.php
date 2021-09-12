<?php
session_start();
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "servidores1";
// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
$q=$_SESSION['emailmandar'];
$hoy = getdate();

$texto=$_POST['texto'];
$email='lordjuanic@gmail.com';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


else{
		if(empty($texto)||empty($email))
 			{


 				header("Location:../html/administrador.php?emptyfields?uid=");
 				exit();



 			}
 		else{

 			$sql="INSERT INTO feeds (feed, id_feed, Email) VALUES ('$texto',NULL,'$q')";
 			echo $texto;
 			if ($conn->multi_query($sql) === TRUE) {
               echo "feed creado  ";
              header("Location:../html/administrador.php?mail=");
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



 		}
 	}
 		

$conn->close();
?>






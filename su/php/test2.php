<?php
session_start();
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "servidores1";
// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
 


$contrasena=$_POST['contrasena'];
$email=$_POST['email'];
$sql = "SELECT Email,contrasena FROM usuario WHERE Email='$email' AND contrasena='$contrasena'";
$result = $conn->query($sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


else{
		if(empty($contrasena)||empty($email))
 			{


 				header("Location:../html/index.php?emptyfields?uid=".$username.'&mail'.$email);
 				exit();



 			}
 		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:../html/index.php?errormail=".$username.'&mail'.$email);
			exit();
  
			}

		else{
			$sql = "SELECT * FROM usuario WHERE Email='$email' AND contrasena='$contrasena'";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) 
			{
			
    		echo "<script>console.log('se econtro');</script>";
    		header("Location:../html/index(login).php?mail=".$email."");
    		$_SESSION['email'] =$email;
            
    					

  
  			}
  			else{
  				echo "<script>console.log('no se econtro');</script>";
  				header("Location:../html/index.php?errormail=".$username.'&mail'.$email);



  			}
		

  
  			}
		



		}
 			

#header("Location:../html/index.php");
$conn->close();
?>






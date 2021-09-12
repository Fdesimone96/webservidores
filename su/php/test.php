<?php
session_start();
$servername ="localhost";
$username1 ="root";
$password ="";
$dbname ="servidores1";
// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
$username=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
$contrasena2=$_POST['contrasena2'];
$email=$_POST['email'];
$sql = "SELECT Email FROM usuario WHERE Email='$email'";
$result = $conn->query($sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
		if(empty($username)||empty($contrasena)||empty($email)||empty($contrasena2))
 			{


 				header("Location:../html/registrarse.php?emptyfields?uid=".$username.'&mail'.$email);
 				exit();
 			}

 			
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:../html/registrarse.php?errormail=".$username.'&mail'.$email);
      exit();
  
			}
 			elseif(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/',$contrasena) || $contrasena!=$contrasena2 )
 			{

 				header("Location:../html/registrarse.php?contrasena");
        exit();


 			}
 			if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
  			header("Location:../html/registrarse.php?usuario");
        exit();
			}
      if (mysqli_num_rows($result) > 0) {
			if ($result->num_rows > 0) 
			{    
			       
    				header("Location:../html/registrarse.php?error=usuariorepetido");
            exit();
  			}
    }

else{
	$sql = "INSERT INTO usuario (id_usuario,Email,usuario,contrasena,tipo)
	VALUES (Null, '$email', '$username','$contrasena2',0);";


if ($conn->multi_query($sql) === TRUE) {
  echo "Usuario Creado BIENVENIDO  ";
  $_SESSION['email'] =$email;
  header("Location:../html/index(login).php?mail=".$email."");
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
#header("Location:../html/index.php");
$conn->close();
}
?>






 	<?php


 		if(isset($_POST['aceptar'])){

 			require 'conncet.php';

 			$username=$_POST['nombre'];
 			$contrasena=$_POST['contrasena'];
 			$contrasena2=$_POST['contrasena2'];
 			$email=$_POST['email'];
 			
 			if(empty($username)||empty($username)||empty($username)||empty($username))
 			{


 				header("Location:../registrarse.php?emptyfields?uid=".$username.'&mail'.$email);
 				exit();



 			}

 			elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
 			{

 				header("Location:../registrarse.php?emptyfields?uid=".$username.'&mail'.$email);


 			}
 			elseif(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/',$contrasena) || $contrasena!=$contrasena2 )
 			{

 				header("Location:../registrarse.php?emptyfields?uid=".$username.'&mail'.$email);


 			}
 			elseif(!preg_match('/^[a-zA-Z]+$/',$username) || !preg_match('/\s/',$username) )
 			{

 				header("Location:../registrarse.php?emptyfields?uid=".$username.'&mail'.$email);


 			}
 			else{
 				$sql= "SELECT Email FROM usuario WHERE Email=?";
 				$stmt=mysql_stmt_init(&conn);
 				if(!mysql_stmt_prepare($stm,$sql))
 				{

 					header("Location:../registrarse.php?error=sqlerror");
 						exit();

 				}
 			}

 				else{
 					mysqli_stmt_bin_param($stmt,'s',$username);
 					mysqli_stmt_execute($stmt);
 					mysqli_stmt_store_result($stmt);
 					$resultcheck=mysqli_stmtnum_rows($stmt);
 					if($resultcheck>0){
 						header("Location:../registrarse.php?error=usernametaken=".$email);

 						exit():
 					}
 				else{

 					$sql="INSERT INTO usuario (id_usuario, Email, usuario, contrasena, tarjeta, cvv, tipo) VALUES (NULL,$mail,$usuario,$contrasena, 0, 0, 0)";



 					}

 				}

 				}

 			}

 		}
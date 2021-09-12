<?php

 $dbServername='localhost';
 $dbUsername='root';
 $dbPassword='';
 $dbName='servidores1';
 $conn=mysql_connect($dbServername,$dbUsername,$dbPassword,$dbName);
 if(!$conn)
 {
 	echo "<script>console.log('error');</script>";
 	die();

 }	
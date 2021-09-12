<?php

$conexion=mysqli_connect('localhost','root','','servidores1');
  session_start();
  unset($_SESSION['compra']);
  $mail=$_SESSION['email']

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="../css/comprar.css">
  <link rel="stylesheet" type="text/css" href="../css/administrador.css">
<script type="text/javascript" src="../js/user.js"></script>
<script type="text/javascript" src="../js/eliminar.js"></script>
<script type="text/javascript" src="../js/blog.js"></script>
<script src="../js/admin.js"></script>
<script src="../js/eliminarcuenta.js"></script>

<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/menuClick2.css">


  </head>
    <body clase="cuerpo">

<nav class="menu">
  <ul id="ulNav">
    <li id="liNav"><a id="nav" href="index(login).php"><b>Inicio</b></a></li>
    <li id="liNav"><a id="nav" href="sobreNossotros.php">Sobre  nosotros</a></li>
    <li id="liNav"><a id="nav" href="contacto.php">Contacto</a></li>
  </ul>
</nav>

<div id="menuDesplegable">

    <input type="checkbox" />


    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
      <a id="Amenu" href="comprar2.php"><li>Comprar</li></a>
      <a id="Amenu" href="user.php"><li>Cuenta</li></a>
      <a id="Amenu" name='adm' href="administrador.php"><li>Administrar</li></a>
    </ul>
  </div>
  <script type="text/javascript">admin();</script>

  <h1 id="titAdmin"><?php echo $_SESSION['email']?><button class="btn" onclick="eliminar1();">Eliminar Cuenta</button></h1>


  </div>
      <!-- Aca terminan los menu -->

      <div class="listaServidores">
        <div class="encabezado">
          <div class="nomEncabezado">
            <span> Estado </span>
          </div>
          <div class="dueEncabezado">
            <span> IP </span>
          </div>
          <div class="cpuEncabezado">
            <span> CPU </span>
          </div>
          <div class="ramEncabezado">
            <span> RAM </span>
          </div>
          <div class="almEncabezado">
            <span> Almacenamiento </span>
          </div>
          <div class="velEncabezado">
            <span> Velocidad de conexion </span>
          </div>
          <div class="agrEncabezado">
            <span> Eliminar </span>
          </div>

          </div>
<?php
/*SELECT * FROM compra INNER JOIN servidor ON servidor.id_servidor=compra.id_servidor WHERE EMAIL="lordjuanic@gmail.com"*/

$sql="SELECT * FROM compra INNER JOIN servidor ON servidor.id_servidor=compra.id_servidor WHERE EMAIL='$mail';";

$result=mysqli_query($conexion,$sql);
$i=0;
while($mostrar=mysqli_fetch_array($result)){

  if($mostrar['id_servidor']%2==0)
  {
    ?>
    <div class="caracteristicasTA">
            <div class= "idCaracteristicas">
              <?php echo "<span class='idCara'>".$mostrar['id_servidor']." </span>"; ?>
            </div>
           <div class="nomCaracteristicas">
            <?php echo "<span >".$mostrar['Encendido']."</span>";?>
          </div>
          <div class="preCaracteristicas">
            <?php echo "<span>".$mostrar['IP']."</span>";?>
          </div>
          <div class="cpuCaracteristicas">
             <?php echo "<span>".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."gb</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."mbps</span>";?>
          </div>
          <div class="inpCaracteristicas" onclick="eliminar(<?= $mostrar['id_compra'] ?>)">
            <img src="borrar.png"width="40" height="40"/>
          </div>
      </div>
      <?php
}
      else if($mostrar['id_servidor']%2==1)
      {
        ?>
        <div class="caracteristicasTB">
         <div class= "idCaracteristicas">
              <?php echo "<span class='idCara'>".$mostrar['id_servidor']." </span>"; ?>
         </div>
          <div class="nomCaracteristicas">
            <?php echo "<span ".$mostrar['id_servidor'].">".$mostrar['Encendido']."</span>";?>
          </div>
          <div class="preCaracteristicas">
            <?php echo "<span>".$mostrar['IP']."</span>";?>
          </div>
          <div class="cpuCaracteristicas">
             <?php echo "<span>".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."gb</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."mbps</span>";?>
          </div>
          <div class="inpCaracteristicas" onclick="eliminar(<?= $mostrar['id_compra'] ?>)";>
            <img src="borrar.png"width="40" height="40"/>
          </div>
      </div>
      <?php
      }
      $i++;
    }
    ?>



    <div class="feed" id='post' style="overflow: auto"><script type="text/javascript">loadDoc();setInterval(loadDoc,3000);</script></script></div>
  </body>
  </html>

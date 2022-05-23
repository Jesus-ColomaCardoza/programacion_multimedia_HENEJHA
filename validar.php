<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","bdalquilerdevehiculos");


$consulta="SELECT*FROM empleado where IDempleado='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:menu.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">Error al Ingresar</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
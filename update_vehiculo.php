<?php
include("conexion.php");
$con=conectar();

$placa=$_POST['placa'];
$codestado_1=$_POST['codestado_1'];
$tipo_vehiculo=$_POST['tipo_vehiculo'];
$asientos=$_POST['asientos'];
$marca=$_POST['marca'];
$color=$_POST['color'];


$sql="UPDATE vehiculo SET  placa='$placa',codestado_1='$codestado_1',tipo_vehiculo='$tipo_vehiculo',asientos='$asientos',marca='$marca',color='$color' WHERE placa='$placa'";

$query=mysqli_query($con,$sql);
   if($query){
        Header("Location: vehiculo.php");
   }else{

   }
?>
<?php
include("conexion.php");
$con=conectar();

$placa=$_POST['placa'];
$codestado_1=$_POST['codestado_1'];
$tipo_vehiculo=$_POST['tipo_vehiculo'];
$asientos=$_POST['asientos'];
$marca=$_POST['marca'];
$color=$_POST['color'];


$sql="call sp_insert_vehiculo('$placa','$codestado_1','$tipo_vehiculo',$asientos,'$marca','$color')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: vehiculo.php");
}else {
}
?>
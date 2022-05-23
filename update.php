<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$dni_cliente=$_POST['dni_cliente'];
$id_empleado=$_POST['id_empleado'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$tipo_de_cliente=$_POST['tipo_de_cliente'];


$sql="UPDATE cliente SET  DNIcliente='$dni_cliente',IDempleado_1='$id_empleado',contraseña='$contraseña',nombre='$nombre',apellidos='$apellidos',telefono='$telefono',direccion='$direccion',tipo_de_cliente='$tipo_de_cliente' WHERE IDcliente='$id_cliente'";

$query=mysqli_query($con,$sql);
   if($query){
        Header("Location: cliente.php");
   }else{

   }
?>
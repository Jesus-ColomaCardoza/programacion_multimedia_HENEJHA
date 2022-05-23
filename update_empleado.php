<?php
include("conexion.php");
$con=conectar();


$IDempleado=$_POST['IDempleado'];
$contraseña=$_POST['contraseña'];
$IDcargo_1=$_POST['IDcargo_1'];
$IDsalario_1=$_POST['IDsalario_1'];
$DNI=$_POST['DNI'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];


$sql="UPDATE empleado SET  IDempleado='$IDempleado',contraseña='$contraseña',IDcargo_1='$IDcargo_1',IDsalario_1='$IDsalario_1',DNI='$DNI',nombre='$nombre',apellidos='$apellidos',telefono='$telefono',direccion='$direccion' WHERE IDempleado='$IDempleado'";

$query=mysqli_query($con,$sql);
   if($query){
        Header("Location: empleado.php");
   }else{

   }
?>
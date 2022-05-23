<?php 
include("conexion.php");
$con=conectar();

//$IDempleado=$_POST['IDempleado'];
$contraseña=$_POST['contraseña'];
$IDcargo_1=$_POST['IDcargo_1'];
$IDsalario_1=$_POST['IDsalario_1'];
$DNI=$_POST['DNI'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sql="call sp_insert_empleado('$contraseña','$IDcargo_1','$IDsalario_1','$DNI','$nombre','$apellidos','$telefono','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

//$id_cliente=$_POST['id_cliente'];
$dni_cliente=$_POST['dni_cliente'];
$id_empleado=$_POST['id_empleado'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$tipo_de_cliente=$_POST['tipo_de_cliente'];

$sql="call sp_insert_cliente('$dni_cliente','$id_empleado','$contraseña','$nombre','$apellidos','$telefono','$direccion','$tipo_de_cliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
}else {
}
?>
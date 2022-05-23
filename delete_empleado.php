<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_GET['IDempleado'];

//$sql="DELETE FROM empleado  WHERE IDempleado='$IDempleado'";
$sql="call sp_delete_empleado('$IDempleado')";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>

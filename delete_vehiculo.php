<?php

include("conexion.php");
$con=conectar();

$placa=$_GET['placa'];

$sql="call sp_delete_vehiculo('$placa')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vehiculo.php");
    }
?>
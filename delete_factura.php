<?php

include("conexion.php");
$con=conectar();

$codf=$_GET['codf'];

$sql="call sp_delete_factura('$codf')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
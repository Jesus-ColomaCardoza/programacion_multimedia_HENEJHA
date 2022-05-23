<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_GET['id'];

$sql="call sp_delete_cliente('$id_cliente')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>

<?php
include("conexion.php");
$con=conectar();

//$codfactura=$_POST['codfactura'];
$IDcliente_1=$_POST['IDcliente_1'];
$forma_pago_1=$_POST['forma_pago_1'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];

$sql="call sp_insert_factura('$IDcliente_1','$forma_pago_1','$fecha',$monto)";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: factura.php");
}else {
}
?>
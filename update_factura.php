<?php
include("conexion.php");
$con=conectar();

$codfactura=$_POST['codfactura'];
$IDcliente_1=$_POST['IDcliente_1'];
$forma_pago_1=$_POST['forma_pago_1'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];


$sql="UPDATE factura SET  codfactura='$codfactura',IDcliente_1='$IDcliente_1',forma_pago_1='$forma_pago_1',fecha='$fecha',monto='$monto' WHERE codfactura='$codfactura'";

$query=mysqli_query($con,$sql);
   if($query){
        Header("Location: factura.php");
   }else{

   }
?>
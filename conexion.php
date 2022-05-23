<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="bdalquilerdevehiculos";
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);

    /*if(!$con){
        echo "Error de conección";
    }else{
        echo "conexion exitosa";
    }*/

    return $con;
}
?>
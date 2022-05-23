
<?php 
   include("conexion.php");
    $con=conectar();
   //para conectar con la tabla empresa
    $sql="SELECT *  FROM empresa";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);  // me agarra la fila que quiero
        //$row=mysqli_fetch_array($query); para ciclo  

  /*
   include("conexion.php");
   $con=conectar();
   //para conectar con la tabla empresa
    $sql="SELECT *  FROM empresa where nombre='HENEJHA' ";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($query);  // me agarra la fila que quiero 
        //$row=mysqli_fetch_array($query); para ciclo  
  
    <h1 class="animate__animated animate__backInLeft"><?php echo $row['3']?> <?php echo $row['1']?></h1>
  */


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <!--<link rel="stylesheet" href="css/cabecera.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="validar.php" method="post">
      <img class="photologo" src="data:image/png;base64,<?php echo base64_encode($row['logo']); ?>">
      <h1 class="animate__animated animate__backInLeft"><?php echo $row['rubro']?> <?php echo $row['nombre']?></h1>
      <p>Usuario <input type="text" placeholder="ID empleado" name="usuario"></p>
      <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
      <input type="submit" value="Ingresar">
   </form> 
</body>
</html>
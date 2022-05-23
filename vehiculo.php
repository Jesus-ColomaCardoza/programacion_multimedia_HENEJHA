<?php 
    

    //para las sesiones
    session_start();
    $varsesion=$_SESSION['usuario'];
    if($varsesion==null || $varsesion=''){
        header("location:index.php");  //me regresa la pagina de inicioCORREGUIRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRCLIENTE
        die();
    }

   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA VEHICULO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css" >

    </head>
    <body>
        <?php 
            //colocamos es header que esta en el archivo header.php
            require 'extras/header.php'
        ?>
        <section id="container">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Datos de vehiculo</h1>
                                <form action="insert_vehiculo.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="placa" placeholder="Ingrese placa">
                                    <input type="text" class="form-control mb-3" name="codestado_1" placeholder="Código de estado">
                                    <input type="text" class="form-control mb-3" name="tipo_vehiculo" placeholder="Tipo de vehiculo">
                                    <input type="number" class="form-control mb-3" name="asientos" placeholder="Asientos">
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">

                                    <input type="submit" value="Registrar" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <p style=" font-size: 20px; font-weight: bold">Reporte de Empleados: <a href="reportes_pdf/reporte_empleado.php" class="btn btn-primary" style="color: white;" target="_BLANK">Descargar</a></p>
                            <div style="overflow: auto; width: 940px; height: 450px;">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Placa</th>
                                        <th>Estado</th>
                                        <th>Tipo_vehiculo</th>
                                        <th>Asientos</th>
                                        <th>Marca</th>
                                        <th>Color</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="call sp_select_vehiculo";
                                            $query=mysqli_query($con,$sql);
                                            $row=mysqli_fetch_array($query);  
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['placa']?></th>
                                                <th><?php  echo $row['codestado_1']?></th>
                                                <th><?php  echo $row['tipo_vehiculo']?></th>
                                                <th><?php  echo $row['asientos']?></th>
                                                <th><?php  echo $row['marca']?></th>    
                                                <th><?php  echo $row['color']?></th>        
                                                <th><a href="actualizar_vehiculo.php?placa=<?php echo $row['placa'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="delete_vehiculo.php?placa=<?php echo $row['placa'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </div>
                            </table>
                        </div>
                    </div>  
            </div>
            </section>
    </body>
</html>
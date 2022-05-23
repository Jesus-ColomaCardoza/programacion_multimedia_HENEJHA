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
        <title> PAGINA CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css" >

    </head>
    <body>
        <?php 
            //colocamos es header que esta en el archivo header.php
            require 'extras/header.php';
        ?>
        <section id="container">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Datos de Cliente</h1>
                                <form action="insert.php" method="POST">

                                    <!--<input type="text" class="form-control mb-3" name="id_cliente" placeholder="ID del cliente">-->
                                    <input type="text" class="form-control mb-3" name="dni_cliente" placeholder="DNI">
                                    <input type="text" class="form-control mb-3" name="id_empleado" placeholder="ID de empleado ">
                                    <input type="Password" class="form-control mb-3" name="contraseña" placeholder="contraseña">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-3" name="tipo_de_cliente" placeholder="Tipo de Cliente">
                                    
                                    <input type="submit" value="Registrar" class="btn btn-primary">
                                </form>
                        </div>
                        
                        <div class="col-md-8" >

                            <p style=" font-size: 20px; font-weight: bold">Reporte de Clientes: <a href="reportes_pdf/reporte_cliente.php" class="btn btn-primary" style="color: white;" target="_BLANK" >Descargar</a></p>   

                            <div style="overflow: auto; width: 940px; height: 450px;">
                            <table class="table">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>DNI</th>
                                        <th>ID_empleado</th>
                                        <th>contraseña</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>telefono</th>
                                        <th>Direccion</th>
                                        <th>Tipo_de_Cliente</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="call sp_select_cliente";
                                            $query=mysqli_query($con,$sql);
                                            $row=mysqli_fetch_array($query);  

                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDcliente']?></th>
                                                <th><?php  echo $row['DNIcliente']?></th>
                                                <th><?php  echo $row['IDempleado_1']?></th>
                                                <th><?php  echo $row['contraseña']?></th>
                                                <th><?php  echo $row['nombre']?></th>    
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['direccion']?></th>    
                                                <th><?php  echo $row['tipo_de_cliente']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            </div>
                            
                        </div>
                    </div>  
                </div>
            </section>
    </body>
</html>
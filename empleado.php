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
        <title> PAGINA ALUMNO</title>
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
                            <h1>Ingrese Datos de Empleado</h1>
                                <form action="insert_empleado.php" method="POST">

                                    <!--<input type="text" class="form-control mb-3" name="IDempleado" placeholder="Ingrese Id">-->
                                    <input type="Password" class="form-control mb-3" name="contraseña" placeholder="Contraseña ">
                                    <input type="text" class="form-control mb-3" name="IDcargo_1" placeholder="Ingrese ID de cargo">
                                    <input type="text" class="form-control mb-3" name="IDsalario_1" placeholder="Ingrese ID de salario">
                                    <input type="text" class="form-control mb-3" name="DNI" placeholder="DNI">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Ingrese Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Ingrese Apellidos">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    
                                    <input type="submit" value="Registrar" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <p style=" font-size: 20px; font-weight: bold">Reporte de Empleados: <a href="reportes_pdf/reporte_empleado.php" class="btn btn-primary" style="color: white;" target="_BLANK">Descargar</a></p>

                            <div style="overflow: auto; width: 940px; height: 450px;">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>ID_empleado</th>
                                        <th>contraseña</th>
                                        <th>ID_cargo</th>
                                        <th>ID_salario</th>                                    
                                        <th>DNI</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>telefono</th>
                                        <th>Direccion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="call sp_select_empleado";
                                            $query=mysqli_query($con,$sql);
                                            $row=mysqli_fetch_array($query);  
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDempleado']?></th>
                                                <th><?php  echo $row['contraseña']?></th>
                                                <th><?php  echo $row['IDcargo_1']?></th>
                                                <th><?php  echo $row['IDsalario_1']?></th>
                                                <th><?php  echo $row['DNI']?></th>    
                                                <th><?php  echo $row['nombre']?></th>    
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['direccion']?></th>    
                                                <th><a href="actualizar_empleado.php?IDempleado=<?php echo $row['IDempleado'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="delete_empleado.php?IDempleado=<?php echo $row['IDempleado'] ?>" class="btn btn-danger">Eliminar</a></th>
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
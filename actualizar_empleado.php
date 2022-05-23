
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css" >

        
    </head>
    <body>
        <?php 
            //colocamos es header que esta en el archivo header.php
            require 'extras/header.php';

            $IDempleado=$_GET['IDempleado'];
            $sql="SELECT * FROM empleado WHERE IDempleado='$IDempleado'";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
        ?>
        <section id="container">
                <div class="container mt-5">
                    <form action="update_empleado.php" method="POST">
        

                                <input type="hidden" name="IDempleado" value="<?php echo $row['IDempleado']  ?>">

                                <input type="Password" class="form-control mb-3" name="contraseña" placeholder="Contraseña" value="<?php echo $row['contraseña']  ?>">
                                <input type="text" class="form-control mb-3" name="IDcargo_1" placeholder="Contraseña" value="<?php echo $row['IDcargo_1']  ?>">
                                 <input type="text" class="form-control mb-3" name="IDsalario_1" placeholder="Contraseña" value="<?php echo $row['IDsalario_1']  ?>">
                                <input type="text" class="form-control mb-3" name="DNI" placeholder="Nombres" value="<?php echo $row['DNI']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Apellidos" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Teléfono" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Dirección" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Tipo de cliente" value="<?php echo $row['direccion']  ?>">                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
        </section>
    </body>
</html>
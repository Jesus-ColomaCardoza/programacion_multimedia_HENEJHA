
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

            $id=$_GET['id'];
            $sql="SELECT * FROM cliente WHERE IDcliente='$id'";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
        ?>
        <section id="container">

                <div class="container mt-5">
                    <form action="update.php" method="POST">
        

                                <input type="hidden" name="id_cliente" value="<?php echo $row['IDcliente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni_cliente" placeholder="DNI del cliente" value="<?php echo $row['DNIcliente']  ?>">
                                <input type="text" class="form-control mb-3" name="id_empleado" placeholder="Contraseña" value="<?php echo $row['IDempleado_1']  ?>">
                                <input type="Password" class="form-control mb-3" name="contraseña" placeholder="Contraseña" value="<?php echo $row['contraseña']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_de_cliente" placeholder="Tipo de cliente" value="<?php echo $row['tipo_de_cliente']  ?>">                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
        </section>
    </body>
</html>
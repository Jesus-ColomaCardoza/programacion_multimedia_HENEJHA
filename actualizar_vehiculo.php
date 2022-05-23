
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
            
            $placa=$_GET['placa'];

            $sql="SELECT * FROM vehiculo WHERE placa='$placa'";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
        ?>
        <section id="container">
                <div class="container mt-5">
                    <form action="update_vehiculo.php" method="POST">
        

                                <input type="hidden" name="placa" value="<?php echo $row['placa']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="codestado_1" placeholder="Codigo de estado" value="<?php echo $row['codestado_1']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_vehiculo" placeholder="tipo de vehiculo" value="<?php echo $row['tipo_vehiculo']  ?>">
                                <input type="text" class="form-control mb-3" name="asientos" placeholder="asientos" value="<?php echo $row['asientos']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="color" value="<?php echo $row['color']  ?>">
                                                          
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
        </section>
    </body>
</html>
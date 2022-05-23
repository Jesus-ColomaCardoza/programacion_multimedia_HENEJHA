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
            
            $codf=$_GET['codf'];

            $sql="SELECT * FROM factura WHERE codfactura='$codf'";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
        ?>
        <section id="container">

                <div class="container mt-5">
                    <form action="update_factura.php" method="POST">
        

                                <input type="hidden" name="codfactura" value="<?php echo $row['codfactura']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="IDcliente_1" placeholder="DNI del cliente" value="<?php echo $row['IDcliente_1']  ?>">
                                <input type="Password" class="form-control mb-3" name="forma_pago_1" placeholder="Contraseña" value="<?php echo $row['forma_pago_1']  ?>">
                                <input type="Date" class="form-control mb-3" name="fecha" placeholder="Nombres" value="<?php echo $row['fecha']  ?>">
                                <input type="number" class="form-control mb-3" name="monto" placeholder="Apellidos" value="<?php echo $row['monto']  ?>">
                                                            
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
        </section>
    </body>
</html>
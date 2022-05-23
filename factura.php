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
            require 'extras/header.php'
        ?>
        <section id="container">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Datos de Factura</h1>
                                <form action="insert_factura.php" method="POST">

                                    <!--<input type="text" class="form-control mb-3" name="codfactura" placeholder="Ingrese codigo de Factura">-->
                                    <input type="text" class="form-control mb-3" name="IDcliente_1" placeholder="ID de cliente">
                                    <input type="text" class="form-control mb-3" name="forma_pago_1" placeholder="Forma de Pago">
                                    <input type="Date" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="number" class="form-control mb-3" name="monto" placeholder="Monto">

                                    <input type="submit" value="Registrar" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <p style=" font-size: 20px; font-weight: bold">Reporte de Facturas: <a href="reportes_pdf/reporte_factura.php" class="btn btn-primary" style="color: white;" target="_BLANK">Descargar</a></p>
                            <div style="overflow: auto; width: 940px; height: 450px;">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>codigo_factura</th>
                                        <th>ID_cliente</th>
                                        <th>Forma de pago</th>
                                        <th>Fecha</th>
                                        <th>monto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $sql="call sp_select_factura";
                                            $query=mysqli_query($con,$sql);
                                            $row=mysqli_fetch_array($query);  
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['codfactura']?></th>
                                                <th><?php  echo $row['IDcliente_1']?></th>
                                                <th><?php  echo $row['forma_pago_1']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['monto']?></th>    
                                                <th><a href="actualizar_factura.php?codf=<?php echo $row['codfactura'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="delete_factura.php?codf=<?php echo $row['codfactura'] ?>" class="btn btn-danger">Eliminar</a></th>
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
<?php 
    ob_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reportes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("../conexion.php");
        $con=conectar();
        $sql="SELECT *  FROM empresa";
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);  

     ?>
                            <div class="col-md-8">
                                
                                <h1 align="center"><?php echo $row['rubro']?> <?php echo $row['nombre']?></h1>
                                <h2 align="center" ><u>Registro de Clientes</u></h2> 
                                <table border="solid" >
                                    <thead class="table-success table-striped" >
                                        <tr>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">ID</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">DNI</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">ID_empleado</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">contraseña</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">Nombres</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">Apellidos</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">telefono</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">Direccion</th>
                                            <th bgcolor="#2E64FE" style="color:white; margin: 0px;">Tipo_de_Cliente</th>
                                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <?php
                                                $con=conectar();
                                                $sql="call sp_select_cliente";
                                                $query=mysqli_query($con,$sql);
                                                $row=mysqli_fetch_array($query);  

                                                while($row=mysqli_fetch_array($query)){
                                            ?>
                                                <tr>
                                                    <td><?php  echo $row['IDcliente']?></td>
                                                    <td><?php  echo $row['DNIcliente']?></td>
                                                    <td><?php  echo $row['IDempleado_1']?></td>
                                                    <td><?php  echo $row['contraseña']?></td>
                                                    <td><?php  echo $row['nombre']?></td>    
                                                    <td><?php  echo $row['apellidos']?></td>    
                                                    <td><?php  echo $row['telefono']?></td>
                                                    <td><?php  echo $row['direccion']?></td>    
                                                    <td><?php  echo $row['tipo_de_cliente']?></td>    
                                             
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
</body>
</html>

<?php 
    $html=ob_get_clean();

    require_once '../reportes/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf= new Dompdf();

  $options = $dompdf -> getOptions();
    $options -> set(array('isRemoteEnabled' => false));
    $dompdf-> setOptions($options);
  

    $dompdf->loadhtml($html);
    $dompdf->setPaper('letter');
    $dompdf->render();
    $dompdf->stream("archivo_.pdf", array("Attachment" => false));
?>


<?php 
	include("conexion.php");
    $con=conectar();
	//para conectar con la tabla empresa
    $sql="SELECT *  FROM empresa";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);  // me agarra la fila que quiero
        //$row=mysqli_fetch_array($query); para ciclo  

?>
	<header>
		<div class="header">
			<div class="optionsBar">
				<img class="photologo" src="data:image/png;base64,<?php echo base64_encode($row['logo']); ?>" alt="Usuario"><!--EDITAR LOGO DE LA EMPRESA a traves de la base de datos, ahi el $row para indicar el valor de usa los indixes-->
				<h1><?php echo $row['rubro']?> <?php echo $row['nombre']?></h1>	
			</div>
			<div class="optionsBar">
				<p>Bienvendido</p><!--deberia ir la fecha o nada-->
				<span>|</span>
				<span class="user">usurio</span>
				<img class="photouser" src="IMG/user.png" alt="Usuario">
				<a href="cerrar_sesion.php"><img class="close" src="IMG/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<nav>
			<ul>
				<li class="principal">
					<a href="menu.php">Inicio</a>
					<!--<ul>
						<li><a href="#">Nuevo Usuario</a></li>
						<li><a href="#">Lista de Usuarios</a></li>
					</ul>
					</li>-->
				</li>
				<li class="principal">
					<a href="cliente.php">Clientes</a>
					<!--<ul>
						<li><a href="#">Nuevo Cliente</a></li>
						<li><a href="cliente.php">Lista de Clientes</a></li>
					</ul>-->
				</li>
				<li class="principal">
					<a href="empleado.php">Empleados</a>
					<!--<ul>
						<li><a href="#">Nuevo Cliente</a></li>
						<li><a href="cliente.php">Lista de Clientes</a></li>
					</ul>-->
				</li>
				<li class="principal">
					<a href="vehiculo.php">Vehículos</a>
					<!--<ul>
						<li><a href="#">Nuevo Proveedor</a></li>
						<li><a href="#">Lista de Proveedores</a></li>
					</ul>-->
				</li>
				<li class="principal">
					<a href="factura.php">Facturas</a>
					<!--<ul>
						<li><a href="#">Nuevo Factura</a></li>
						<li><a href="#">Facturas</a></li>
					</ul>-->
				</li>
			</ul>
		</nav>
	</header>



	<?php 
/*<?php 
	include("conexion.php");
    $con=conectar();
	//para conectar con la tabla empresa
    $sql="SELECT *  FROM empresa where nombre='NELIDA' ";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($query);  // me agarra la fila que quiero
        //$row=mysqli_fetch_array($query); para ciclo  

?>
	<header>
		<div class="header">
			<div class="optionsBar">
				<img class="photologo" src="data:image/png;base64,<?php echo base64_encode($row['2']); ?>" alt="Usuario"><!--EDITAR LOGO DE LA EMPRESA a traves de la base de datos, ahi el $row para indicar el valor de usa los indixes-->
				<h1><?php echo $row['3']?> <?php echo $row['1']?></h1>	
			</div>
			<div class="optionsBar">
				<p>Bienvendido</p><!--deberia ir la fecha o nada-->
				<span>|</span>
				<span class="user">usurio</span>
				<img class="photouser" src="IMG/user.png" alt="Usuario">
				<a href="cerrar_sesion.php"><img class="close" src="IMG/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>*/

	 ?>

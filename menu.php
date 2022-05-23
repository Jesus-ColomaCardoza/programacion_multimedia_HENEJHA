<?php 
	//seguridad de paginacion
	session_start();
	$varsesion=$_SESSION['usuario'];
	if($varsesion==null || $varsesion=''){
		header("location:index.php");	//me regresa la pagina de inicioCORREGUIRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRCLIENTE
		die();
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu principal</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>login</title>
   
    <link rel="stylesheet" href="css/menuh.css">

</head>
<body>
	<?php 
		include('extras/header.php');
	?>
	<section id="container">
		<!--escribir aqui codigo-->
	</section>
</body>
</html>
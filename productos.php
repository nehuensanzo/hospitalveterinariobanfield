
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hospital Veterinario Banfield</title>
	<!-- PRIMERO FUENTE-SEGUNDO NORMALIZE-TERCEROCSS -->
	
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="fonts/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100i,400|Oswald:200,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/productos.css">
	<link rel="stylesheet" href="css/hospital.css">
</head>
<body class="productos">
	<?php include ('inc/cabezal.php'); ?>

	<div class="holder">
		<div class="wrapper">
		    	<div class="product-img">
		     		<img src="img/farmacia.jpg" height="350" width="327">
		    	</div>
		    <div class="product-info">
		      	<div class="product-text">
			     <h1>FARMACIA</h1>
			     <h2>Todos los medicamentos a tu disposición</h2>
			     <p>Distribuimos en todo el pais, mediante acuerdos con los laboratorios veterinarios lider del mercado. Compramos productos veterinarios al mejor precio, por eso comprás al mejor precio, sin renunciar a nada. Con confianza y garantia.
		     	</div>
		    </div>
 		</div>
 		<div class="wrapper">
		    	<div class="product-img">
		     		<img src="img/accesorios.jpg" height="350" width="327">
		    	</div>
		    <div class="product-info">
		      	<div class="product-text">
			     <h1>ACCESORIOS</h1>
			     <h2>COLLARES - CORREAS - JUGUETES - CANILES</h2>
			     <p>Encontrá los mejores accesorios para tu mascota. Contamos con los mejores precios y marcas del mercado. Accesorios de todo tipo: collares, correas, camas, comederos, bebederos, pelotas, huesos, y todo aquello con lo que tus mascotas puedan divertirse.
		     	</div>
		    </div>
 		</div>
 		<div class="wrapper">
		    	<div class="product-img">
		     		<img src="img/alimento.jpg" height="350" width="327">
		    	</div>
		    <div class="product-info">
		      	<div class="product-text">
			     <h1>ALIMENTOS BALANCEADOS</h1>
			     <h2>MARCAS PREMIUM PARA TU MASCOTA</h2>
			     <p>Somos especialistas en productos de  primera calidad. Directo de fábrica. 
			     <br/>Entrega a domicilio. Líderes en ventas en Zona Sur.
		     	</div>
		    </div>
 		</div>
		<div class="tablaPrecios">
			<table>
				<thead>
					<tr><td>Nombre del producto</td><td>Precio del producto</td></tr>
				</thead>
				<tbody>
					<?php
					include('conexion.php');
					$query = "SELECT nombre, precio FROM productos WHERE categoria = 'Alimentos'";
					$resultado = mysqli_query($conexion,$query);
					while($producto = mysqli_fetch_array($resultado)){
						echo "<tr><td>{$producto["nombre"]}</td><td>{$producto["precio"]}</td></tr>";
					};
					?>
				</tbody>
			</table>
		</div>
	</div>
		<?php include('inc/pie.php'); ?>
		<script> </script>
	</body>
</html>

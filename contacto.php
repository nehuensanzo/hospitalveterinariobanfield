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
	<link rel="stylesheet" href="css/contacto.css">
	<link rel="stylesheet" href="css/hospital.css">
</head>
<body class="contacto">
	<?php include ('inc/cabezal.php'); ?>
	<section>
		<div class="contenedor">
			<div class="holder">
				<div class="columna1">
					<h2>COMPLETE EL SIGUIENTE FORMULARIO</h2>
					<a name="contacto"></a>
					<form action="procesador_formulario.php" method="POST" class="formulario">

						<input type="text" name="Nombre" placeholder="Nombre" required>
						<input type="text" name="Correo" placeholder="@Correo"required> 
						<input type="text" name="Telefono" placeholder="Teléfono"required>  
						<textarea name="Mensaje" placeholder="Escriba aquí su mensaje"></textarea>
						<input type="submit" value="ENVIAR" id="boton">
					</form>
					<?php 
			if(isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>
				<div class="msg">El mensaje se envío correctamente</div>
			<?php } ?>
				</div>
				<div class="columna2">
					<h2>OTRAS VÍAS DE CONTACTO</h2>
					<div>
						<span class="telefono2">4276-2412</span>
					</div>
					<div>
						<a href="mailto:resultadoshvb@gmail.com">
						<span class="resu">resultadoshvb <br/>@gmail.com</span>
						</a>
					</div>
					<div>
						<a href="https://es-la.facebook.com/" target="_blank">
						<span  class="facebook">FACEBOOK</span>
						</a>
					</div>
					<div>
						<a href="https://www.instagram.com/?hl=es-la" target="_blank">
						<span class="instagram">INSTAGRAM</span>
						</a>
					</div>
				</div>
			</div>
		</div>	

				
		
	</section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.831053902582!2d-58.437378484385036!3d-34.73465268042568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccd96845c3571%3A0x141490bdb49a66f1!2sHospital%20Veterinario%20Banfield!5e0!3m2!1ses-419!2sar!4v1569974877950!5m2!1ses-419!2sar" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
	
	<?php include('inc/pie.php'); ?>
		<script> </script>
	</body>
</html>

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
	<link rel="stylesheet" href="fonts2/style.css"/>
	<link rel="stylesheet" href="css/servicios.css">
	<link rel="stylesheet" href="css/hospital.css">

</head>
<body class="servicios">
	<?php include ('inc/cabezal.php'); ?>
	<div class="general">
		<div class="holder">
			<div id="slider" class="cycle-slideshow" 
					data-cycle-fx="scrollHorz" 
					data-cycle-speed="500" 
					data-cycle-pause-on-hover="true"
					data-cycle-slides="div"
					data-cycle-prev="#flechaizquierda"
					data-cycle-next="#flechaderecha"
					data-cycle-swipe="true" >
				<div class="contenedor">
					<h1 class="tituloServicio tituloNuestrosServicios">NUESTROS SERVICIOS</h1>
					<p class="descripcionServicio">Contamos con médicos veterinarios expertos en distintas disciplinas <br> y con la metodología necesaria para llegar a los diagnósticos que permitirán enfocar <br>los tratamientos de manera eficiente y oportuna.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/cruz.png" alt="cruz" >
					<h1 class="tituloServicio">MEDICINA GENERAL</h1>
					<p class="descripcionServicio">Este servicio incluye los cuidados básicos y está orientado a la detección temprana de posibles enfermedades.
					Información al propietario y realización de tratamientos preventivos como los protocolos de vacunación y desparasitación.
					Información y revisión de la nutrición de acuerdo a las necesidades de cada animal.
					Exploración de la salud de la boca, estado del aparato locomotor y su piel.
					
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/lupa.png" alt="lupa">
					<h1 class="tituloServicio">PRUEBAS DIAGNÓSTICAS</h1>
					<p class="descripcionServicio">Disponemos de tecnología avanzada para confirmar o descartar posibles enfermedades en la propia clínica, lo que nos permite un diagnóstico temprano y actuar antes de que la enfermedad se agrave. 	<br/>
					Radiografía digital directa. 
					Ecografía digestiva. 
					Ecocardiografía, Ecodoppler. 
					Análisis clínicos.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/pulmones.png" alt="pulmones"/>
					<h1 class="tituloServicio">MEDICINA INTERNA</h1>
					<p class="descripcionServicio">Nos ocupamos del diagnóstico y el tratamiento <br/> no quirúrgico de enfermedades que afectan a los órganos y sistemas internos.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/piel.png" alt="pulmones"/>
					<h1 class="tituloServicio">DERMATOLOGÍA</h1>
					<p class="descripcionServicio">Disponemos de profesionales especializados en el diagnóstico <br/> y tratamiento de enfermedades que afectan a la piel y las mucosas.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/cirugia.png" alt="pulmones"/>
					<h1 class="tituloServicio">CIRUGÍA Y TRAUMATOLOGÍA</h1>
					<p class="descripcionServicio">Contamos con con amplia experiencia y con un quirófano equipado con monitorización completa, anestesia gaseosa y respiración asistida, lo que permite, en los casos en que sea necesario, realizar intervenciones con éxito minimizando el estrés y los riesgos para la salud del animal.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/peluqueria.png" alt="pulmones"/>
					<h1 class="tituloServicio">PELUQUERÍA CANINA Y FELINA</h1>
					<p class="descripcionServicio">Ofrecemos el servicio de peluquería canina y felina, acorde con las necesidades de cada raza y cada animal, haciendo que no se estresen durante el proceso. Nuestro servicio puede incluir el corte del pelo, limpieza de orejas, oídos y corte de uñas, favoreciendo el confort del animal, la estética y la salud.
					</p>
				</div>
				<div class="contenedor">
					<img class="imagenServicio" src="img/carrito.png" alt="pulmones"/>
					<h1 class="tituloServicio">TIENDA ESPECIALIZADA</h1>
					<p class="descripcionServicio">En nuestras instalaciones dispones de todo tipo de productos <br/> para el bienestar del animal con la ventaja de poder recomendarte lo más adecuado en cada caso.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="flechas">
 		<span class="icon-circle-right" id="flechaderecha"></span>
 		<span class="icon-circle-left" id="flechaizquierda"></span>
 	</div>
	
	<?php include('inc/pie.php'); ?>
		
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.cycle2.min.js"></script>
	

	</body>
</html>

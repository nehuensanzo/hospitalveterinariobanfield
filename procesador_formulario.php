<?php 
	$nombre =$_POST['Nombre'];
	$email =$_POST['Correo'];
	$tel =$_POST['Telefono'];
	$comentario =$_POST['Mensaje'];

	$destino ='nehuensanzo@gmail.com';
	$remitente = "From: $nombre <$email>";
	$asunto = $nombre . ' envio una consulta a traves de la web';
	$contenido = 'Nombre: ' . $nombre . "\r\n";
	$contenido .= 'Email: ' .$email . "\r\n";
	$contenido .= 'Telefono: ' .$tel . "\r\n";
	$contenido .= 'Comentario: ' .$comentario;

	$remitente_usuario ="From: Sitio Hospital Veterinario <nehuensanzo@gmail.com>";
	$asunto_usuario ='Aviso de recibo de consulta';
	$contenido_usuario='Hola ' . $nombre . ' enviaste el siguiente comentario ' . $comentario . "\r\n";
	$contenido_usuario .='A la brevedad nos comunicaremos';

	mail($destino,$asunto,$contenido,$remitente);
	mail($email, $asunto_usuario,$contenido_usuario,$remitente_usuario);

	header('location:contacto.php?envio=ok#contacto');



 ?>
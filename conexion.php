<?php 
/*CONEXION CON LOS DATOS DEL HOSTING*/

// esta es la conexion de webhostapp
// $conexion = mysqli_connect('localhost','id10899749_nehuensanzo','nehuen1990','id10899749_libro') or die (mysqli_connect_error());

// esta es la conexion de casa:
$conexion = mysqli_connect('localhost:3308','root','','productosdb') or die (mysqli_connect_error());

//1 parametro : hosting o servidor (localhsot)
//2 : usuario (root)
//3 : contraseña (vacio)
//4 : nombre de la BD (libro)

 ?>
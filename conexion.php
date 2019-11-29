<?php 
/*CONEXION LOCAL*/
 // $conexion = mysqli_connect('localhost','root','','libro') or die (mysqli_connect_error());


/*CONEXION CON LOS DATOS DEL HOSTING*/
  $conexion = mysqli_connect('localhost:3308','nehuen','nehuen1990','productosdb') or die (mysqli_connect_error());




//1 parametro : hosting o servidor (localhsot)
//2 : usuario (root)
//3 : contraseña (vacio)
//4 : nombre de la BD (libro)

 ?>
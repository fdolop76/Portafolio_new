<?php

/*$conexion = mysqli_connect('localhost', 'root', '','portafolio');
if (!$conexion){
    die("Database Connection Failed" . mysqli_error($conexion));
}
$hola="aquiando";
$select_db = mysqli_select_db($conexion, 'portafolio');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conexion));
}*/
$mysqli = new mysqli("localhost", "root", "", "portafolio");
mysqli_set_charset($mysqli,"utf8");
/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
?>
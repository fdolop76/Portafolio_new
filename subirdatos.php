<?php
include('conexion.php');
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
//conexion a la base de datos

$conexion=mysql_connect("localhost", "root", "portafolio") or die(mysql_error()) ;
mysql_select_db("porofesionalizacion") or die(mysql_error()) ;


$nombre=$_POST["nombre"];
$matricula=$_POST["matricula"];
$mision=$_POST["mision"];
$cosmo=$_POST["cosmo"];         
$autodiag=$_POST["autodiag"];
$poralumno=$_POST["poralumno"];
$porcoordinador=$_POST["porcoordinador"];
$porcolegas=$_POST["porcolegas"];
$objetivos=$_POST["objetivos"];
$asignacion=$_POST["asignacion"];
$programas=$_POST["programas"];
$planes=$_POST["planes"];
$contratos=$_POST["contratos"];
$asistencia=$_POST["asistencia"];
$productos=$_POST["productos"];
$material=$_POST["material"];
$instrumentos=$_POST["instrumentos"];
$bibliografia=$_POST["bibliografia"];
$cuantitativos=$_POST["cuantitativos"];
$cualitativos=$_POST["cualitativos"];
$anexos=$_POST["anexos"];
$c1=$_POST["c1"];
$c2=$_POST["c2"];
$c3=$_POST["c3"];
$c4=$_POST["c4"];
?>


<?php 
/*
echo $_FILES['imagen']['name']; //este es el nombre del archivo que acabas de subir
echo $_FILES['imagen']['type']; //este es el tipo de archivo que acabas de subir
echo $_FILES['imagen']['tmp_name'];//este es donde esta almacenado el archivo que acabas de subir.
echo $_FILES['imagen']['size']; //este es el tamaño en bytes que tiene el archivo que acabas de subir.
echo $_FILES['imagen']['error']; //este almacena el codigo de error que resultaría en la subida.
//imagen es el nombre del input tipo file del formulario. 


//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
?>	
	<script>

    alert("Necesitas seleccionar un Archivo");

</script>


<?php
//header("location: index.html");	
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "audio/x-ms-wma","image/gif","video/mp4","video/avi", "audio/mp3","image/png","application/pdf","application/msword","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	//$limite_kb = 29903778555;

	//if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		//$ruta = "imagenes/" . $_FILES['imagen']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		//if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			// $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			//if ($resultado){
				//echo "el archivo ha sido movido exitosamente";
				//echo $nombre = $_FILES['imagen']['name'];
				//echo $tipo_dato = $_FILES['imagen']['type'];
				//insertamos/guardamos el nombre de la imagen en la tabla.*/
				$mysql=mysql_query("INSERT INTO `profesionalizacion`(`nombre`,`matricula`,`mision`,`cosmo`,`autodiag`,´poralumno´,´porcoordinador´,´porcolegas´,´objetivos´, ´asignacion´,´programas´,´planes´,´contratos´,´asistencia´,´productos´,´material´,´instrumentos´,´bibliografia´,´cuantitativos´,´cualitativos´,´anexos´,´c1´,´c2´,´c3´,´c4´,´c5´) VALUES ('$nombre','$matricula','$mision','$cosmo','$autodiag','$poralumno','$porcoordinador','$porcolegas','$objetivos','$asignacion','$programas','$planes','$contratos','$asistencia','productos','$material','$instrumentos','$bibliografia','$cuantitativos','$cualitativos','$anexos','$c1','$c2','$c3','$c4','$c5')",$conexion);
				if ($mysql) {
				header("");
			
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}



?>
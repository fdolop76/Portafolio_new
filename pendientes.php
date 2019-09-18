<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ('conexion.php');


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
$c5=$_POST["c5"];
echo var_dump ($_POST);


$sql="INSERT INTO `profesionalizacion`(`nombre`,`matricula`,`mision`,`cosmo`,`autodiag`,`poralumno`,`porcoordinador`,`porcolegas`,`objetivos`, `asignacion`,`programas`,`planes`,`contratos`,`asistencia`,`productos`,`material`,`instrumentos`,`bibliografia`,`cuantitativos`,`cualitativos`,`anexos`,`c1`,`c2`,`c3`,`c4`,`c5`) VALUES ('$nombre',$matricula,'$mision','$cosmo','$autodiag','$poralumno','$porcoordinador','$porcolegas','$objetivos','$asignacion','$programas','$planes','$contratos','$asistencia','$productos','$material','$instrumentos','$bibliografia','$cuantitativos','$cualitativos','$anexos','$c1','$c2','$c3','$c4','$c5') WHERE matricula =$matricula ";
if ($sql)
	header("location: actualizar.php");
$result = $mysqli->query($sql);
echo var_dump ($sql);


?>
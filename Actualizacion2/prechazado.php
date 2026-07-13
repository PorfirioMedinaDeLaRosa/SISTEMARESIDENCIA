<?php
	
include'../conexion.php';

	$id = $_POST['no_control'];

	      
$sql = $mysqli->query("delete from asignacionactividades where no_control='$id'");	
$sql = $mysqli->query("delete from asignacionempresa where no_control='$id'");	
$sql = $mysqli->query("delete from asignacionobjectivos where no_control='$id'");	
$sql = $mysqli->query("delete from asignacionproyecto where no_control='$id'");	

$sql = $mysqli->query("delete from actividades where no_control='$id'");
$sql = $mysqli->query("delete from empresa where no_control='$id'");
$sql = $mysqli->query("delete from proyectos where no_control='$id'");	
	



print "El alumno se ha eliminado";
echo "no_control $id";

	 
?>	
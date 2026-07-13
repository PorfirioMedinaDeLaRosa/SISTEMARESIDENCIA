<?php
	
include'../conexion.php';	

	$id = $_POST['id'];

	$periodo = $_POST['nombre'];
	
			$status = $_POST['status'];
			

$sql = $mysqli->query(" UPDATE  periodos SET periodo='$periodo', status='$status'  where idperiodo='$id'");  


print "Datos Actualizados";

	 
?>	

	
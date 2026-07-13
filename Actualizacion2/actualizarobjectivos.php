<?php
	
	include'../conexion.php';	

	$id = $_POST['idobjectivos'];

	
	$objectivo = $_POST['objectivo'];
			

$sql = $mysqli->query(" UPDATE  objectivose SET nombre='$objectivo'  where idobjectivos=$id");                             


header('location:../ALUMNOS2/objectivosespecificoseditar.php');



	 
?>	
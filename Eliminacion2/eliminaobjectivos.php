<?php

$id = $_GET['id'];
		include'../conexion.php';		
	$sql = $mysqli->query("delete from objectivose where idobjectivos='$id'");	
	
	 header('location:../ALUMNOS2/objectivosespecificoseditar.php');
	

	?>
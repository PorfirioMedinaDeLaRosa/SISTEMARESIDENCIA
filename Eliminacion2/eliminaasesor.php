<?php

$id = $_GET['id'];


		include'../conexion.php';			
	$sql = $mysqli->query("delete from numerodeasesores where id='$id'");	
	
	
 	header("Location:../INGENIERIAS2/solicitudes.php");  
	

	?>
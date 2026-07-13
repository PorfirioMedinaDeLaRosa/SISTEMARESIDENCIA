<?php

$id = $_GET['id'];
		include'../conexion.php';		
	$sql = $mysqli->query("delete from cartapresentacion where id='$id'");	
	
	
 	

	?>
<?php

$id = $_GET['id'];
	include'../conexion.php';		
	$sql = $mysqli->query("delete from asesor where IdAS='$id'");	

	header("Location:../INGENIERIAS2/asesordivision.php");  
	
	

	?>
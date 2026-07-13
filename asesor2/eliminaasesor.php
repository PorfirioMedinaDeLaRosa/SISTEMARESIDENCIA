<?php

$id = $_GET['id'];


		include'../conexion.php';			
	$sql = $mysqli->query("delete from numerodeasesores where id='$id'");	
	
	
 	header("Location:../asesor2/proyectos.php");  
	

	?>
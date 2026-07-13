<?php

$id = $_GET['idactividad'];
	include'../conexion.php';		
	$sql = $mysqli->query("delete from actividades where idactividad='$id'");	
	

header("Location:../ALUMNOS2/actividadeseditar.php.php");  



	?>
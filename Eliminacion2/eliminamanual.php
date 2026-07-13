<?php

$id = $_GET['id'];

	include'../conexion.php';


    

	$re3 = $mysqli->query("select 	nombre_archivoMT from manuales where idA='$id'");
	while ($nombre_archivoA=mysqli_fetch_array($re3)) {
		$espera = unlink("../INGENIERIAS2/manuales/".$nombre_archivoA['nombre_archivoMT']);
	}

	$re3 = $mysqli->query("select 	nombre_archivoMU from manuales where idA='$id'");
	while ($nombre_archivoA=mysqli_fetch_array($re3)) {
		$espera = unlink("../INGENIERIAS2/manuales/".$nombre_archivoA['nombre_archivoMU']);
	}
    
    $mysqli->query("delete from manuales where idA ='$id'");

 




	
    header('location:../INGENIERIAS2/listmanuales.php');

	?>
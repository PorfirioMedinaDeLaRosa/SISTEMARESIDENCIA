<?php


	include'../conexion.php';

	$id = $_GET['id'];

	$sql = $mysqli->query("delete from aasesoria where idasesoria='$id'");	
	 header('location:../ASESORES2/menuasesorias.php');
	

	?>
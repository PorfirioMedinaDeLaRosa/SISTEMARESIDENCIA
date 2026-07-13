<?php


	include'../conexion.php';

	$id = $_GET['id'];

	$sql = $mysqli->query("delete from asesoria where id='$id'");	
	 header('location:../ASESORES2/menuasesorias.php');
	

	?>
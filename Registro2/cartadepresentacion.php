<?php
	
	include'../conexion.php';

	$numero = $_POST['numero'];

	$carrera = $_POST['carrera'];

	$proyecto = $_POST['proyecto'];


	$periodo = $_POST['periodo'];



	$carta = $_POST['carta'];

	$cartapuesto = $_POST['cartapuesto'];

	$nombre = $_POST['nombre'];


	$no_control = $_POST['no_control'];


	$seguro = $_POST['seguro'];

	

	$segurof = $_POST['segurof'];

	$empresa = $_POST['empresa'];



	
	$sql = $mysqli->query("insert into  cartapresentacion (oficio,carrera,proyecto,periodo,carta,cartapuesto,nombre,no_control,seguro,segurof,empresa) values ('$numero','$carrera','$proyecto','$periodo','$carta','$cartapuesto','$nombre','$no_control','$seguro','$segurof','$empresa') ");		                         

print "Registro Exitoso";



	 
?>	
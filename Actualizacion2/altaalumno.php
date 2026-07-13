<?php
	
include'../conexion.php';	
 
 
 $no_control = $_POST['no_control'];

 $alumno1 = $_POST['Texto1'];
								
		$mensaje='El Alumno ha registrado su proyecto ';

		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 


	
		




$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ('$no_control' ,'$alumno1')");

$sql = $mysqli->query("insert into asignacionproyecto(no_controlp,mensaje, fecha, no_control) values ('$no_control' ,'$mensaje','$fecha2' ,'$alumno1') ");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$no_control' ,'$alumno1') ");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$no_control' ,'$alumno1') ");








print "Se han Asignado el alumno";







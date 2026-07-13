<?php
	
	include'../conexion.php';

	$idempresa = $_POST['idempresa'];
	//$idproyecto = $_POST['idproyecto'];

	        $observacion = $_POST['observacion'];
	        $status = $_POST['status'];
			
		
					

	$sql = $mysqli->query(" UPDATE empresa SET observacion='$observacion', status='$status'where idempresa='$idempresa'"); 


	                      


print "Datos Actualizados";
	 
?>	

	 
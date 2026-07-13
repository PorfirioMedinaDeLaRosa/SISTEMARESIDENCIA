<?php
	
include'../conexion.php';	

	
	$idactividad = $_POST['idactividad'];

	
			$actividad =  $_POST['actividad'];
			$opcion =  $_POST['opcion'];	
			$observacion =  $_POST['observacion'];
		
			

       $sql = $mysqli->query(" UPDATE  actividades SET		actividad='$actividad', opcion='$opcion',  		observacion='$observacion'  where  idactividad= $idactividad ");                             
header('Location:../asesor2/datosproyecto.php')

	 
?>	
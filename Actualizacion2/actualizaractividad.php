<?php
	
	include'../conexion.php';	

	
	$idactividad = $_POST['idactividad'];

	
			$actividad =  $_POST['actividad'];
			$descripcion =  $_POST['descripcion'];	
			$fecha =  $_POST['fecha'];
			$semanas =  $_POST['semanas'];
			

       $sql = $mysqli->query(" UPDATE  actividades SET		actividad='$actividad', descripcion='$descripcion',  		fecha='$fecha',    semanas='$semanas'   where  idactividad= $idactividad ");                             




	 
?>	
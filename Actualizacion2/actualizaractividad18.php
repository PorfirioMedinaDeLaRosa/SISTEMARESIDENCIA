<?php
	
	include'../conexion.php';	

	
	$idactividad = $_POST['idactividad'];

	
			$actividad =  $_POST['actividad'];
			$descripcion =  $_POST['descripcion'];	
			$fecha =  $_POST['fecha'];
			$fecha2 =  $_POST['fecha2'];
			$semanas =  $_POST['semanas'];


			
		
			

       $sql = $mysqli->query(" UPDATE  actividades SET		actividad='$actividad', descripcion='$descripcion',  		fecha='$fecha', fecha_termino='$fecha2',    semanas='$semanas'	where  idactividad= '$idactividad' ");                             

header("Location:../ALUMNOS2/actividadeseditar.php");  

	 
?>	
<?php
	
	include'../conexion.php';	

	
	$idactividad = $_POST['idactividad'];

	     	$semana1 = $_POST['semana1'];
			$semana2 =  $_POST['semana2'];
			$semana3 =  $_POST['semanas'];	
			
		
			
			

       $sql = $mysqli->query(" UPDATE  actividades SET semana1A='$semana1' , semana2A='$semana2' , semana3A='$semana3' 	where  idactividad= '$idactividad' ");                             

header("Location:../ASESORES2/actividades.php");  

	 
?>	
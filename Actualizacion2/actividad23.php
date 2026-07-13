<?php
	
	include'../conexion.php';	

	
	$idactividad = $_POST['idactividad'];

	
			$actividad =  $_POST['actividad'];
			$descripcion =  $_POST['descripcion'];	
			$fecha =  $_POST['fecha'];
			$fecha2 =  $_POST['fecha2'];
			$semanas =  $_POST['semanas'];


			$semana1 = $_POST['semana1'];
			$semana2 =  $_POST['semana2'];
			$semana3 =  $_POST['semana3'];	
			$semana4 =  $_POST['semana4'];
			$semana5 =  $_POST['semana5'];
			$semana6 =  $_POST['semana6'];


			$semana7 = $_POST['semana7'];
			$semana8 =  $_POST['semana8'];
			$semana9 =  $_POST['semana9'];	
			$semana10 =  $_POST['semana10'];
			$semana11 =  $_POST['semana11'];
			$semana12 =  $_POST['semana12'];


			$semana13 = $_POST['semana13'];
			$semana14 =  $_POST['semana14'];
			$semana15 =  $_POST['semana15'];	
			$semana16 =  $_POST['semana16'];
			$semana17 =  $_POST['semana17'];
			$semana18 =  $_POST['semana18'];
			$semana19 =  $_POST['semana19'];
			$semana20 =  $_POST['semana20'];
			$semana21 =  $_POST['semana21'];
			$semana22 =  $_POST['semana22'];
			$semana23 =  $_POST['semana23'];
			$semana24 =  $_POST['semana24'];
			$semana25 =  $_POST['semana25'];
			
			

       $sql = $mysqli->query(" UPDATE  actividades SET		actividad='$actividad', descripcion='$descripcion',  		fecha='$fecha', fecha_termino='$fecha2',    semanas='$semanas' , semana1='$semana1' , semana2='$semana2' , semana3='$semana3' , semana4='$semana4' , semana5='$semana5' , semana6='$semana6' , semana7='$semana7', semana8='$semana8', semana9='$semana9', semana10='$semana10', semana11='$semana11', semana12='$semana12', semana13='$semana13', semana14='$semana14', semana15='$semana15', semana16='$semana16', semana17='$semana17', semana18='$semana18' , semana19='$semana19', semana20='$semana20' , semana21='$semana21', semana22='$semana22', semana23='$semana23', semana24='$semana24', semana25='$semana25'	where  idactividad= '$idactividad' ");                             

header("Location:../ALUMNOS2/tablasecuencias.php");  

	 
?>	
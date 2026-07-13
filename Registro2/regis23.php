<?php
	


		include'../conexion.php';

		    $no_control = $_POST['no_controla'];
			$carrera =  $_POST['actividad'];
			$email =  $_POST['descripcion'];	
			$telefono =  $_POST['fecha'];
			$fecha2 =  $_POST['fecha2'];
			$usuario =  $_POST['semanas'];


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













								
		$sql = $mysqli->query("insert into actividades (actividad , descripcion, fecha, fecha_termino, semanas, no_control , semana1, semana2
,  semana3, semana4, semana5, semana6, semana7, semana8, semana9, semana10 ,  semana11, semana12, semana13, semana14, semana15, semana16, semana17, semana18, semana19, semana20,semana21,semana22, semana23, semana24, semana25) values ( '$carrera', '$email'
,'$telefono', '$fecha2', '$usuario', '$no_control', '$semana1', '$semana2' , '$semana3',  '$semana4' , '$semana5', '$semana6' , '$semana7' 
, '$semana8' , '$semana9', '$semana10' , '$semana11' , '$semana12' , '$semana13' , '$semana14' , '$semana15' , '$semana16' , '$semana17', '$semana18' , '$semana19' , '$semana20', '$semana21' , '$semana22', '$semana23' , '$semana24' , '$semana25'  ) ");



	header("Location:../ALUMNOS2/actividadeseditar.php");  
	
			
	?>	
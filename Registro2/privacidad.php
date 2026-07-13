<?php
	

			include'../conexion.php';

			$no_control = $_POST['no_control'];

			$mensaje = "Acepto";
			
			$sql = $mysqli->query(" UPDATE  tb_residentes  SET  privacidad='$mensaje' where no_control='$no_control'");                             
			$mensaje='El Alumno ha registrado su proyecto ';

		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 
			$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$no_control' ,'$no_control') ");
			$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ('$no_control' ,'$mensaje','$fecha2', '$no_control') ");
			$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$no_control' ,'$no_control') ");
			$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$no_control' ,'$no_control') ");
			
			$sql = $mysqli->query("insert into proyectos(no_control) values ( '$no_control') ");
			
			$sql = $mysqli->query("insert into empresa(no_control) values ( '$no_control') ");
			
			$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' , no_controladmin ='$no_control'  where no_control='$no_control'");                             
			
			
		header("Location:../ALUMNOS2/homealumno.php")


	?>	
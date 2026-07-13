<?php
	
$no_control = '13CS0001';
	include'../conexion.php';		

			
					//$passworda = $_GET['passworda'];
									
		$mensaje='El Alumno ha actualizado su proyecto ';

		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() );



								
			


			$sql = $mysqli->query(" UPDATE  notificacionalumno  SET mensaje='$mensaje', fecha='$fecha2'   where no_control='$no_control'");    
			
	?>	
 <SCRIPT LANGUAGE="javascript"> 
            
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../ALUMNOS2/menusolicitud.php">
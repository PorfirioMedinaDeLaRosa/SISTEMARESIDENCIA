<?php
	
$no_control = '13CS0001';
			include'../conexion.php';
		$q = $mysqli->query("SELECT * FROM notificacionalumno WHERE no_control = '$no_control'");

if( mysqli_num_rows($q) == 0){



			
					//$passworda = $_GET['passworda'];
									
		$mensaje='El Alumno ha registrado su proyecto ';

		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() );



								
			$sql = $mysqli->query("insert into notificacionalumno (mensaje , fecha , no_control   ) values ( '$mensaje',   '$fecha2',  '$no_control' ) ");

}
else{
//caso contario (else) es porque ese user ya esta registrado
 $mensaje='El Alumno  ha actualizado su proyecto ';
								
	$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() );		
	$sql = $mysqli->query(" UPDATE  notificacionalumno SET mensaje='$mensaje' , fecha='$fecha2'  where no_control='$no_control'");  

}




		

		
			
	?>	
 <SCRIPT LANGUAGE="javascript"> 
            
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../ALUMNOS2/menusolicitud.php">
<?php
	

			include'../conexion.php';	
			$periodo = $_POST['periodo'];
			$status = $_POST['status'];

$qq = $mysqli->query("SELECT * FROM periodos  WHERE periodo = '$periodo'");

if( mysqli_num_rows($qq) == 0 ){

$sql = $mysqli->query("insert into periodos (periodo , status ) values ('$periodo', '$status') ");			
		print "Se ha Registrado el periodo";	
		
}

else{

				
		print "EL Periodo Se Encuentra Registrado";	


	}
	?>	
<?php
	
include'../conexion.php';

	$no_control = $_POST['no_control'];

	        $nombre = $_POST['nombre'];
			$ap = $_POST['ap'];
			$am = $_POST['am'];	
			$carrera = $_POST['carrera'];
			$curp = $_POST['curp'];	
			$semestre = $_POST['semestre'];
			$periodo = $_POST['periodo'];
			$promedio = $_POST['promedio'];	
			$creditosc = $_POST['creditosc'];
			$creditosr = $_POST['creditosr'];
			$porcentaje = $_POST['porcentaje'];
			$numeros = $_POST['numeros'];	

				$password = $_POST['password'];	

if ($nombre=='' or $ap==''or $am==''or $carrera=='' or $curp=='' or $semestre=='' or $periodo=='' or $promedio=='' or $creditosc=='' or $creditosr=='' or $porcentaje=='' or $numeros==''or $password=='') {
	print "Verificar Datos";
}



else{

$sql = $mysqli->query(" UPDATE  tb_residentes SET nombre='$nombre', ap='$ap', am='$am', carrera='$carrera', curp='$curp' , semestre='$semestre' , periodo='$periodo'  , promedio='$promedio' , creditosc='$creditosc' , creditosr='$creditosr' , porcentaje='$porcentaje' , folios='$numeros' , password ='$password' where no_control='$no_control'");                             

print "Datos Actualizados";

}

	 
?>	
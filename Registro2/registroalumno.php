<?php





include'../conexion.php';


		

			
			$no_control = $_POST['no_control'];

			$nombre = $_POST['nombre'];	
			$ap = $_POST['ap'];
			$am = $_POST['am'];
			$carrera = $_POST['carrera'];
			$curp = $_POST['curp'];
            $semestre= $_POST['semestre'];
			$periodo = $_POST['periodo'];	
			$promedio = $_POST['promedio'];
			$creditosc = $_POST['creditosc'];
			$creditosr = $_POST['creditosr'];		
			$porcentaje = $_POST['porcentaje'];
			$seguro = $_POST['seguro'];

			$password = $_POST['password'];



$q = $mysqli->query("SELECT * FROM tb_residentes WHERE no_control = '$no_control'");

if( mysqli_num_rows($q) == 0){






			
if ($no_control==''or $nombre==''or $ap=='' or $am=='' or $carrera=='Opción'or $curp=='' or 
$semestre=='' or $periodo=='' or $promedio=='' or $creditosc=='' or $creditosr=='' or $porcentaje=='' or $seguro=='') {
		print "Verificar Datos";
	}	



else{

		
			$sql = $mysqli->query("insert into tb_residentes(no_control, nombre , ap, am, carrera , curp, semestre, periodo, promedio, creditosc ,creditosr, porcentaje, folios, password) values 
				('$no_control','$nombre','$ap','$am','$carrera','$curp','$semestre','$periodo',
				'$promedio','$creditosc','$creditosr','$porcentaje','$seguro', '$password') ");

		print " Registro Exitoso";

	}}


	else{
		print "El alumno ya se encuentra registrado";
	}

	?>	
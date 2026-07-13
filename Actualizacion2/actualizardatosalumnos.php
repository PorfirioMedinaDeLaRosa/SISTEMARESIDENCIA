<?php
	
	include'../conexion.php';	

	        $idA = $_POST['no_control'];
	         $nombrea = $_POST['cargogt'];
	          $apa = $_POST['emailgt'];
											  
											  
	           $apm = $_POST['telefonogt'];

            $semestrea = $_POST['semestrea'];
	        $seguroa = $_POST['seguroa'];
			$folioa = $_POST['folioa'];
			$emaila = $_POST['emaila'];	
			$emailains = $_POST['emailains'];	
			$callea = $_POST['callea'];
			$numeroea = $_POST['numeroea'];
			$numeroia = $_POST['numeroia'];
			$coloniaa = $_POST['coloniaa'];
			$municipioa = $_POST['municipioa'];	
			$estadoa = $_POST['estadoa'];
			$telefonoa = $_POST['telefonoa'];
			$periodo = $_POST['periodo'];

			$password = $_POST['password'];


if ($idA=='' or $nombrea=='' or $apa=='' or $apm=='' or $semestrea=='' or $seguroa=='' or $folioa=='' or $emaila=='' or $callea=='' or $numeroia=='' or $numeroea=='' or $coloniaa=='' or $municipioa=='' or $estadoa=='' or $telefonoa=='' or $periodo=='' or $emailains=='') {
	print "Verificar Datos vacios"  ;
}


else{

$paso2='x';


$sql = $mysqli->query(" UPDATE  tb_residentes  SET nombre='$nombrea', ap='$apa', am='$apm' ,semestre='$semestrea', seguro='$seguroa', folios='$folioa', email='$emaila',  calle='$callea', 	noe='$numeroea', 	noi='$numeroia',colonia='$coloniaa',municipio='$municipioa'  , estado='$estadoa' , periodo='$periodo' , telefono='$telefonoa' , password = '$password' , paso2='$paso2', emailins='$emailains' where no_control ='$idA'")
or die("ERROR AL ACTUALIZAR LOS DATOS");
echo "DATOS ACTUALIZADOS CORRECTAMENTE";
	} 
?>	
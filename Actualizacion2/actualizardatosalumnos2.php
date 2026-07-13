<?php
	
	include'../conexion.php';	

	        $idA = $_POST['no_control'];
            $semestrea = $_POST['semestrea'];
	        $seguroa = $_POST['seguroa'];
			$folioa = $_POST['folioa'];
			$emaila = $_POST['emaila'];	
			$callea = $_POST['callea'];
			$numeroea = $_POST['numeroea'];
			$numeroia = $_POST['numeroia'];
			$coloniaa = $_POST['coloniaa'];
			$municipioa = $_POST['municipioa'];	
			$estadoa = $_POST['estadoa'];
			$telefonoa = $_POST['telefonoa'];
			


$sql = $mysqli->query(" UPDATE  tb_residentes  SET semestre='$semestrea', seguro='$seguroa', folios='$folioa', email='$emaila',  calle='$callea', 	noe='$numeroea', 	noi='$numeroia',colonia='$coloniaa',municipio='$municipioa'  , estado='$estadoa'  , telefono='$telefonoa'   where no_control ='$idA'");                             


print "Datos Actualizados";
	 
?>
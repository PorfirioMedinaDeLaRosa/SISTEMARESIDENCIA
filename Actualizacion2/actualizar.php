<?php
	
include'../conexion.php';
	$id = $_POST['idA'];

	        $nombregt = $_POST['nombregt'];
			$cargogt = $_POST['cargogt'];
			$emailgt = $_POST['emailgt'];	
			$telefonogt = $_POST['telefonogt'];
			
			$passwordgt = $_POST['passwordgt'];	









if ($nombregt=="" or $cargogt=="" or $emailgt=="" or $telefonogt=="" or $passwordgt=="") {

	print "Falta LLenar Un Campo, Verificar";
}

else{

$sql = $mysqli->query(" UPDATE  admin SET NCompletoA='$nombregt', CargoA='$cargogt', EmailA='$emailgt',  TelefonoA='$telefonogt', PasswordA='$passwordgt'  where idA=$id");                             

print "Datos Actualizados";

}	 
?>	

	
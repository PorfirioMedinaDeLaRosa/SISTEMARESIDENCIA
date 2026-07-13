<?php
	
include'../conexion.php';
	$no_control = $_POST['no_control'];
	$idproyecto = $_POST['idproyecto'];

	        $periodop = $_POST['periodop'];
			


$sql = $mysqli->query(" UPDATE proyectos SET periodop='$periodop'  where idproyecto=$idproyecto");                             

print "Datos Actualizados";

	 
?>	
<?php
	
	include'../conexion.php';

$no_control = $_POST['no_control'];


	$periodo = $_POST['periodo'];
			

  $sql = $mysqli->query(" UPDATE  tb_residentes SET periodo='$periodo' where no_control='$no_control'");                             

print "Datos Actualizados";

?>	
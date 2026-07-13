<?php
	
include'../conexion.php';

	$no_control = $_POST['no_control'];

	        $status = $_POST['status'];
			


$sql = $mysqli->query(" UPDATE  tb_residentes SET situacion='$status' where no_control='$no_control'");                             

header("Location:../INGENIERIAS2/IINFBD.php")
	 
?>	
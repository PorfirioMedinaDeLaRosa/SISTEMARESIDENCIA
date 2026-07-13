<?php
	
	$mysqli = new mysqli("localhost", "root", "", "bdejemplo");	

	        $ids = $_POST['id'];
            $fecha = $_POST['fecha'];
			

	$sql = $mysqli->query(" UPDATE  asignacionasesor SET fecha ='$fecha' where id=$ids");                             


print "<script>window.location='../INGENIERIAS2/asignacionasesor.php';</script>";

	 
?>	
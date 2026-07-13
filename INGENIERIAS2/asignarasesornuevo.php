<?php
	
	include'../conexion.php';

	        $id = $_POST['id'];


	        
            
	       $Texto1 = $_POST['Texto1'];
			


$sql = $mysqli->query(" UPDATE  numerodeasesores SET 	 	IdAS='$Texto1'  where id='$id'");                             


print "Datos Actualizados";

	 
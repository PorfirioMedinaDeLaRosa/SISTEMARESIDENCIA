<?php
	
	include'../conexion.php';

	        $ids = $_POST['no_control'];
	      
            $status = $_POST['status'];
			$modificaciones = $_POST['modificaciones'];
			

   $sql = $mysqli->query(" UPDATE   reportesasesor  SET 	statusR1='$status', modificacionesR1='$modificaciones'  where no_control='$ids'");                             

header("Location:../INGENIERIAS2/procesor1.php");  


	 
?>	


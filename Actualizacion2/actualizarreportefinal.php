<?php
	
	include'../conexion.php';

	        $ids = $_POST['no_control'];
	      
            $status = $_POST['status'];
			$modificaciones = $_POST['modificaciones'];
			

   $sql = $mysqli->query(" UPDATE  reportesasesor  SET statuss='$status', 
    modificaciones='$modificaciones'  where no_control='$ids'");                             

header("Location:../INGENIERIAS2/procesor3.php");  


	 
?>	

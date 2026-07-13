<?php
	
	include'../conexion.php';

	        $ids = $_POST['no_control'];
	      
            $status = $_POST['statusFF'];
			$modificaciones = $_POST['modificacionesFF'];
			

   $sql = $mysqli->query(" UPDATE  reportesasesor  SET statussFF='$status', 
    modificacionesFF='$modificaciones'  where no_control='$ids'");                             

header("Location:../INGENIERIAS2/procesor3.php");  


	 
?>	

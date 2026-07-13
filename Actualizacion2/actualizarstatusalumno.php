<?php
include'../conexion.php';	

	        $ids = $_POST['no_control'];
            $status = $_POST['status'];
			

           $sql = $mysqli->query(" UPDATE  tb_residentes SET 	status='$status' where no_control='$ids'");                             

header("location:../INGENIERIAS2/IINFBDE.php")


	 
?>	
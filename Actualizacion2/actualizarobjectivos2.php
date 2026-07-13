<?php
	
include'../conexion.php';	

	

	$idobjectivo = $_POST['idobjectivo'];

	
			$objectivo =  $_POST['objectivo'];
			$opciono =  $_POST['opciono'];	
			$observaciono =  $_POST['observaciono'];
		
			

       $sql = $mysqli->query(" UPDATE  objectivose  SET		 opcion='$opciono',  		observacion='$observaciono'  where  idobjectivos= $idobjectivo ");                             


	 
?>	

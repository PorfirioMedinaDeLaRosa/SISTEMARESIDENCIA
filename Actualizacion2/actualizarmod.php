<?php
	
	$mysqli = new mysqli("localhost", "root", "", "bdejemplo");	

	        $ids = $_POST['id'];
            $mod = $_POST['mod'];
			

	$sql = $mysqli->query(" UPDATE  solicitud SET 	modificaciones='$mod' where id=$ids");                             


print "<script>window.location='../home.html';</script>";

	 
?>	
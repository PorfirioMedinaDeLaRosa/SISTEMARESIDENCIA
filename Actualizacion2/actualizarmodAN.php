<?php
	
	$mysqli = new mysqli("localhost", "root", "", "bdejemplo");	

	        $idan = $_POST['idan'];
            $mod = $_POST['mod'];
			

	$sql = $mysqli->query(" UPDATE  anteproyecto SET modificaciones='$mod' where ida=$idan");                             


print "<script>window.location='../home.html';</script>";

	 
?>	
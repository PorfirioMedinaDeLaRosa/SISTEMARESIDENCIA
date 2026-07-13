<?php
	
	$mysqli = new mysqli("localhost", "root", "", "bdejemplo");	

	        $ida = $_POST['ida'];
            $mod = $_POST['mod'];
			

	$sql = $mysqli->query(" UPDATE  anteproyecto SET modificaciones='$mod' where id=$ida");                             


print "<script>window.location='../home.html';</script>";

	 
?>	
<?php
	

		include'../conexion.php';	
			$nombred = $_GET['nombred'];
			$carrerad = $_GET['carrerad'];
			$emaild = $_GET['emaild'];	
			$telefonod = $_GET['telefonod'];
			$usuariod = $_GET['usuariod'];
			$passwordd = $_GET['passwordd'];						
			$sql = $mysqli->query("INSERT INTO divisiones (NombreD , CarreraD , EmailD, TelefonoD, UsuarioD, PasswordD   ) values ('$nombred', '$carrerad', '$emaild',  '$telefonod', '$usuariod' , '$passwordd' ) ");			
			print "<script>window.location='../Divisiones.php';</script>";
	?>	
 
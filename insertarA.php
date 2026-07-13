<?php
	
include'../conexion.php';
			
			$nombrea = $_GET['nombrea'];
			$emaila = $_GET['emaila'];
			$telefonoa = $_GET['telefonoa'];	
			$usuarioa = $_GET['usuarioa'];
			$passworda = $_GET['passworda'];
									
			$sql = $mysqli->query("INSERT INTO asistente (NombreAA , EmailAA, TelefonoAA,
			 	UsuarioAA, PasswordAA  ) values ('$nombrea', '$emaila', '$telefonoa',  '$usuarioa', '$passworda' ) ");	
			print "<script>window.location='../Asistente.php';</script>";		
			
	?>	
 
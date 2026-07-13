<?php
	
include'../conexion.php';
				
			$controla = $_GET['controla'];
			$nombrea = $_GET['nombrea'];
			$carreraa = $_GET['carreraa'];	
			$emaila = $_GET['emaila'];
			$telefonoa = $_GET['telefonoa'];
			$usuarioa = $_GET['usuarioa'];		
			$passworda = $_GET['passworda'];					
			$sql = $mysqli->query("insert into alumnos (NoControl , NCompletoA , CarreraA,  EmailA , TelefonoA,  UsuarioA, PassowordA) values ('$controla', '$nombrea', '$carreraa',  '$emaila', '$telefonoa' , '$usuarioa' , '$passworda') ");			
		print "<script>window.location='../Alumnos.php';</script>";	
	?>	
 
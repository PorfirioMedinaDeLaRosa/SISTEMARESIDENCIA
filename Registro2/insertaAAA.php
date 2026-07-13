<?php
	
include'../conexion.php';
			
			
			$nombrea = $_GET['nombrea'];
			$carreraa = $_GET['carreraa'];	
			$emaila = $_GET['emaila'];
			$telefonoa = $_GET['telefonoa'];
			$usuarioa = $_GET['usuarioa'];		
			$passworda = $_GET['passworda'];					
			$sql = $mysqli->query("insert into asesor (NombreAS , CarreraAS , EmailAS, TelefonoAS	, UsuarioAS , 	PasswordAs	) values ( '$nombrea', '$carreraa',  '$emaila', '$telefonoa' , '$usuarioa' , '$passworda') ");			
		print "<script>window.location='../Asesor.php';</script>";
	
	?>	
 
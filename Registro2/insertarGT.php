<?php
	

			include'../conexion.php';
			$nombre = $_GET['nombre'];
			$carrera = $_GET['carrera'];
			$email = $_GET['email'];	
			$telefono = $_GET['telefono'];
			$usuario = $_GET['usuario'];
			$password = $_GET['password'];

			$sql = $mysqli->query("INSERT INTO gestion (NombreGT , CargoGT ,CorreoGT, TelefonoGT, UsuarioGT, PasswordGT   ) values ('$nombre', '$carrera', '$email',  '$telefono', '$usuario' , '$password' ) ");			
		print "<script>window.location='../GT.php';</script>";	
	?>	
 
<?php
	
	include'../conexion.php';	

	        $id = $_POST['id'];
            
	        $nombrea = $_POST['nombrea'];
			$carreraa = $_POST['carreraa'];
			
			$emaila = $_POST['emaila'];	
			$telefonoa = $_POST['telefonoa'];
			$usuarioa = $_POST['usuarioa'];
			$passworda = $_POST['passworda'];	

	$sql = $mysqli->query(" UPDATE  asesor SET 	NombreAS='$nombrea',  CarreraAS	='$carreraa',   EmailAS='$emaila', TelefonoAS='$telefonoa',  UsuarioAS='$usuarioa', PasswordAs='$passworda'  where idAS='$id'");                             

 header("Location: ../asesordivision.php");  


	 
?>	

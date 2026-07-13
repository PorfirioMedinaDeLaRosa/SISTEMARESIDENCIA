<?php
	
	include'../conexion.php';

	$nombre = $_POST['nombre'];

$qq = $mysqli->query("SELECT * FROM carreras  WHERE carrera = '$nombre'");

if( mysqli_num_rows($qq) == 0 ){

	
	$sql = $mysqli->query("insert into carreras (carrera) values ('$nombre') ");		                         

print "Registro Exitoso";

}

else{

	print "La Carrera ya se encuentra Registrada";
}

	 
?>	
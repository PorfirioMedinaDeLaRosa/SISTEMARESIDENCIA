<?php

include'../conexion.php';





//$actividades=$_POST['actividades']
$statusproyecto=$_POST['aprovacion'];
//$statusproyecto="";


$idproyecto=$_POST['idproyecto'];




$sql = $mysqli->query(" UPDATE  proyectos  SET     StatusGeneral='$statusproyecto'     where idproyecto='$idproyecto'");   

			

print "Datos Actualizados";


?>
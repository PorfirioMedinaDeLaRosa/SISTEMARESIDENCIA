<?php

$id = $_GET['id'];

	include'../conexion.php';

    $sql1 = $mysqli->query("delete from actividades where no_control='$id'");
	$sql3 = $mysqli->query("delete from asignacionproyecto where no_control='$id'");	
	$sql4 = $mysqli->query("delete from asignacionempresa where no_control='$id'");	
	$sql5 = $mysqli->query("delete from asignacionobjectivos where no_control='$id'");	
	$sql6 = $mysqli->query("delete from asignacionactividades where no_control='$id'");	
	$sql7 = $mysqli->query("delete from actividades where no_control='$id'");	
	$sql8 = $mysqli->query("delete from empresa where no_control='$id'");
	$sql9 = $mysqli->query("delete from objectivose where no_control='$id'");
	$sql10 = $mysqli->query("delete from proyectos where no_control='$id'");

	$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='' ,  no_controladmin ='' , privacidad='' where no_control='$id'");                             
  
	
    header('location:finalproyecto.php');

	?>
<?php

$id = $_GET['id'];
	include'../conexion.php';


$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$id'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);

  


  if ($total==1) {

  	$re1 = $mysqli->query("select nombre_archivoS from solicitud where no_control='$id'");
	while ($nombre_archivoS=mysqli_fetch_array($re1)) {
		$espera = unlink("../ALUMNOS/archivosliberacion/".$nombre_archivoS['nombre_archivoS']);
	}


    $re2 = $mysqli->query("select 	nombre_archivoSS from solicitud where no_control='$id'");
	while ($nombre_archivoSS=mysqli_fetch_array($re2)) {
		$espera = unlink("../ALUMNOS/archivossolicitud/".$nombre_archivoSS['nombre_archivoSS']);
	}

	$re3 = $mysqli->query("select 	nombre_archivoA from solicitud where no_control='$id'");
	while ($nombre_archivoA=mysqli_fetch_array($re3)) {
		$espera = unlink("../ALUMNOS/archivosanteproyecto/".$nombre_archivoA['nombre_archivoA']);
	}
    
    $mysqli->query("delete from solicitud where no_control ='$id'");

 
//ELIMINA ARCHIVOS DE GESTION TECNOLOGICA



    $re4 = $mysqli->query("select 	nombre_archivoAC from tramitesgestion where no_control='$id'");
	while ($nombre_archivoAC=mysqli_fetch_array($re4)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoAC['nombre_archivoAC']);
	}


	$re5 = $mysqli->query("select 	nombre_archivoCA from tramitesgestion where no_control='$id'");
	while ($nombre_archivoCA=mysqli_fetch_array($re5)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoCA['nombre_archivoCA']);
	}


	$re6 = $mysqli->query("select 	nombre_archivoCP from tramitesgestion where no_control='$id'");
	while ($nombre_archivoCP=mysqli_fetch_array($re6)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoCP['nombre_archivoCP']);
	}


     $mysqli->query("delete from tramitesgestion where no_control ='$id'");



//ELIMINA ARCHIVOS DEL ALUMNO REPORTES 

    $re7 = $mysqli->query("select 	nombre_archivoR1 from reportesasesor where no_control='$id'");
	while ($nombre_archivoR1=mysqli_fetch_array($re7)) {
		$espera = unlink("../ASESORES/reporteuno/".$nombre_archivoR1['nombre_archivoR1']);
	}


	$re8 = $mysqli->query("select 	nombre_archivoR2 from reportesasesor where no_control='$id'");
	while ($nombre_archivoR2=mysqli_fetch_array($re8)) {
		$espera = unlink("../ASESORES/reportedos/".$nombre_archivoR2['nombre_archivoR2']);
	}



   $re9 = $mysqli->query("select nombre_archivoR3 from reportesasesor where no_control='$id'");
	while ($nombre_archivoR3=mysqli_fetch_array($re9)) {
		$espera = unlink("../ASESORES/reportetres/".$nombre_archivoR3['nombre_archivoR3']);
	}
    

    $re10 = $mysqli->query("select 	nombre_archivoRF from reportesasesor where no_control='$id'");
	while ($nombre_archivoRF=mysqli_fetch_array($re10)) {
		$espera = unlink("../ASESORES/reportefinal/".$nombre_archivoRF['nombre_archivoRF']);
	}


    $mysqli->query("delete from reportesasesor where no_control ='$id'");


//ELIMINA ARCHIVOS DEL ALUMNO REPORTES  NO EVALUACIONES

    $re7 = $mysqli->query("select 	nombre_archivoR1 from reportes  where no_control='$id'");
	while ($nombre_archivoR1=mysqli_fetch_array($re7)) {
		$espera = unlink("../ASESORES/areporteuno/".$nombre_archivoR1['nombre_archivoR1']);
	}


	$re8 = $mysqli->query("select 	nombre_archivoR2 from reportes where no_control='$id'");
	while ($nombre_archivoR2=mysqli_fetch_array($re8)) {
		$espera = unlink("../ASESORES/areportedos/".$nombre_archivoR2['nombre_archivoR2']);
	}



   $re9 = $mysqli->query("select nombre_archivoR3 from reportes where no_control='$id'");
	while ($nombre_archivoR3=mysqli_fetch_array($re9)) {
		$espera = unlink("../ASESORES/areportetres/".$nombre_archivoR3['nombre_archivoR3']);
	}
    

    $re10 = $mysqli->query("select 	nombre_archivoRF from reportes where no_control='$id'");
	while ($nombre_archivoRF=mysqli_fetch_array($re10)) {
		$espera = unlink("../ASESORES/areportefinal/".$nombre_archivoRF['nombre_archivoRF']);
	}


    $mysqli->query("delete from reportes where no_control ='$id'");


//ELIMINACION DE LAS DEMAS TABLAS RELACIONADAS CON LOS ALUMNOS


    $sql1 = $mysqli->query("delete from actividades where no_control='$id'");
	$sql3 = $mysqli->query("delete from asignacionproyecto where no_control='$id'");	
	$sql4 = $mysqli->query("delete from asignacionempresa where no_control='$id'");	
	$sql5 = $mysqli->query("delete from asignacionobjectivos where no_control='$id'");	
	$sql6 = $mysqli->query("delete from asignacionactividades where no_control='$id'");	
	$sql7 = $mysqli->query("delete from actividades where no_control='$id'");	
	$sql8 = $mysqli->query("delete from empresa where no_control='$id'");
	$sql9 = $mysqli->query("delete from objectivose where no_control='$id'");
	$sql10 = $mysqli->query("delete from proyectos where no_control='$id'");



  }



if ($total>=2) {

	$sql = $mysqli->query("delete from asignacionproyecto where no_control='$id'");		
	$sql2 = $mysqli->query("delete from asignacionempresa where no_control='$id'");	
	$sql3 = $mysqli->query("delete from asignacionobjectivos where no_control='$id'");	
	$sql4 = $mysqli->query("delete from asignacionactividades where no_control='$id'");	


$re1 = $mysqli->query("select nombre_archivoS from solicitud where no_control='$id'");
	while ($nombre_archivoS=mysqli_fetch_array($re1)) {
		$espera = unlink("../ALUMNOS/archivosliberacion/".$nombre_archivoS['nombre_archivoS']);
	}


    $re2 = $mysqli->query("select 	nombre_archivoSS from solicitud where no_control='$id'");
	while ($nombre_archivoSS=mysqli_fetch_array($re2)) {
		$espera = unlink("../ALUMNOS/archivossolicitud/".$nombre_archivoSS['nombre_archivoSS']);
	}

	$re3 = $mysqli->query("select 	nombre_archivoA from solicitud where no_control='$id'");
	while ($nombre_archivoA=mysqli_fetch_array($re3)) {
		$espera = unlink("../ALUMNOS/archivosanteproyecto/".$nombre_archivoA['nombre_archivoA']);
	}
    
    $mysqli->query("delete from solicitud where no_control ='$id'");


    $re4 = $mysqli->query("select 	nombre_archivoAC from tramitesgestion where no_control='$id'");
	while ($nombre_archivoAC=mysqli_fetch_array($re4)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoAC['nombre_archivoAC']);
	}


	$re5 = $mysqli->query("select 	nombre_archivoCA from tramitesgestion where no_control='$id'");
	while ($nombre_archivoCA=mysqli_fetch_array($re5)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoCA['nombre_archivoCA']);
	}


	$re6 = $mysqli->query("select 	nombre_archivoCP from tramitesgestion where no_control='$id'");
	while ($nombre_archivoCP=mysqli_fetch_array($re6)) {
		$espera = unlink("../archivosgestion/".$nombre_archivoCP['nombre_archivoCP']);
	}


     $mysqli->query("delete from tramitesgestion where no_control ='$id'");

	
	 $re7 = $mysqli->query("select 	nombre_archivoR1 from tramitesgestion where no_control='$id'");
	while ($nombre_archivoR1=mysqli_fetch_array($re7)) {
		$espera = unlink("../ASESORES/reporteuno/".$nombre_archivoR1['nombre_archivoR1']);
	}


	$re8 = $mysqli->query("select 	nombre_archivoR2 from tramitesgestion where no_control='$id'");
	while ($nombre_archivoR2=mysqli_fetch_array($re8)) {
		$espera = unlink("../ASESORES/reportedos/".$nombre_archivoR2['nombre_archivoR2']);
	}



   $re9 = $mysqli->query("select nombre_archivoR3 from tramitesgestion where no_control='$id'");
	while ($nombre_archivoR3=mysqli_fetch_array($re9)) {
		$espera = unlink("../ASESORES/reportetres/".$nombre_archivoR3['nombre_archivoR3']);
	}
    

    $re10 = $mysqli->query("select 	nombre_archivoRF from tramitesgestion where no_control='$id'");
	while ($nombre_archivoRF=mysqli_fetch_array($re10)) {
		$espera = unlink("../ASESORES/reportefinal/".$nombre_archivoRF['nombre_archivoRF']);
	}


    $mysqli->query("delete from reportesasesor where no_control ='$id'");


//ELIMINA ARCHIVOS DEL ALUMNO REPORTES  NO EVALUACIONES

    $reA = $mysqli->query("select 	nombre_archivoR1 from reportes  where no_control='$id'");
	while ($nombre_archivoR1=mysqli_fetch_array($reA)) {
		$espera = unlink("../ASESORES/areporteuno/".$nombre_archivoR1['nombre_archivoR1']);
	}


	$reA8 = $mysqli->query("select 	nombre_archivoR2 from reportes where no_control='$id'");
	while ($nombre_archivoR2=mysqli_fetch_array($reA8)) {
		$espera = unlink("../ASESORES/areportedos/".$nombre_archivoR2['nombre_archivoR2']);
	}



   $reA9 = $mysqli->query("select nombre_archivoR3 from reportes where no_control='$id'");
	while ($nombre_archivoR3=mysqli_fetch_array($reA9)) {
		$espera = unlink("../ASESORES/areportetres/".$nombre_archivoR3['nombre_archivoR3']);
	}
    

    $reA10 = $mysqli->query("select 	nombre_archivoRF from reportes where no_control='$id'");
	while ($nombre_archivoRF=mysqli_fetch_array($reA10)) {
		$espera = unlink("../ASESORES/areportefinal/".$nombre_archivoRF['nombre_archivoRF']);
	}


    $mysqli->query("delete from reportes where no_control ='$id'");


}










	

	
    header('location:../INGENIERIAS/IINFBD.php');


	?>
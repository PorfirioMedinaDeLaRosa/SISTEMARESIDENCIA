<?php
	
	include'../conexion.php';	

	$idproyecto = $_POST['idproyecto'];

	$nocontrol = $_POST['nocontrol'];

	$nombrep = $_POST['nombrep'];
			$opcione =  $_POST['opcione'];
			
			$objectivog =  $_POST['objectivog'];	
			$justificacionp =  $_POST['justificacionp'];
			$problemasp =  $_POST['problemasp'];


     		$DiaInicio =  $_POST['DiaInicio'];
			$MesInicio =  $_POST['MesInicio'];
			$AnoInicio =  $_POST['AnoInicio'];
			$DiaTermino =  $_POST['DiaTermino'];
			$MesTermino =  $_POST['MesTermino'];
			$AnoTermino =  $_POST['AnoTermino'];



if ($nocontrol=='' or $nombrep=='' or $opcione=='' 
 or $objectivog=='' or $justificacionp=='' or $problemasp=='' 
  or $DiaInicio=='' or $MesInicio=='' or $AnoInicio=='' or $DiaTermino==''
 or $MesTermino=='' or $AnoTermino=='') {
	
	print "Verificar datos vacios";

}



else 
{
			
$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() );

$sql = $mysqli->query(" UPDATE  proyectos  SET nombrep='$nombrep', opcion='$opcione',  objectivo='$objectivog',  justificacion='$justificacionp',  problematica='$problemasp' , DiaInicio='$DiaInicio', MesInicio='$MesInicio',  AnoInicio='$AnoInicio', DiaTermino='$DiaTermino', MesTermino='$MesTermino', AnoTermino='$AnoTermino'  where 	idproyecto='$idproyecto'");            

$mensaje='El ALUMNO HA ACTUALIZADO SU PROYECTO';

$sql = $mysqli->query(" UPDATE  asignacionproyecto  SET mensaje='$mensaje',  fecha='$fecha2' where 	no_controlp='$nocontrol'");                             





$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$nocontrol'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);


if ($total ==1) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");   

}




if ($total ==2) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_2'");   

}



if ($total ==3) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];
$n_3 = $data[2]['no_control'];





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_2'");  

$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_3'");  

}



if ($total ==4) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];
$n_3 = $data[2]['no_control'];
$n_4 = $data[3]['no_control'];





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_4'");    

}




if ($total ==5) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];
$n_3 = $data[2]['no_control'];
$n_4 = $data[3]['no_control'];
$n_5 = $data[4]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_4'");    
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_5'");   
}





if ($total ==6) {


	$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
  $result = $mysqli->query($numero2);
  $total = mysqli_num_rows($result);
  
  
  
  $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  
  
  while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
  
  $n_1 = $data[0]['no_control'];
  $n_2 = $data[1]['no_control'];
  $n_3 = $data[2]['no_control'];
  $n_4 = $data[3]['no_control'];
  $n_5 = $data[4]['no_control'];
  $n_5 = $data[5]['no_control'];
  
   
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_1'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_2'");  
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_3'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_4'");    
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_5'");   
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso9='x'  where no_control='$n_6'");   
  

}













print "El proyecto ha sido actualizado";

}
	 
?>	
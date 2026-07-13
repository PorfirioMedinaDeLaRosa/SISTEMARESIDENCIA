<?php
	
	include'../conexion.php';	

	
$no_control= $_POST['no_control'];

$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);







            $nombree = $_POST['nombree'];
			$giroe = $_POST['giroe'];	
			$tipoe = $_POST['tipoe'];
			$actividadese = $_POST['actividadese'];
			$rfce = $_POST['rfce'];		
			$domicilioe = $_POST['domicilioe'];
            $coloniae= $_POST['coloniae'];
			$codigoe = $_POST['codigoe'];	
			$telefonoe = $_POST['telefonoe'];
			$ciudade = $_POST['ciudade'];
			$emaile = $_POST['emaile'];		
			$misione = $_POST['misione'];
			$titulare = $_POST['titulare'];
			$puestote = $_POST['puestote'];
			$asesore = $_POST['asesore'];		
			$pasesore = $_POST['pasesore'];
			$acuerdoe = $_POST['acuerdoe'];
			$pacuerdoe = $_POST['pacuerdoe'];
			$cartae = $_POST['cartae'];
			$pcartae = $_POST['pcartae'];
			$ubicacion = $_POST['ubicacion'];
			$idempresa = $_POST['idempresa'];	




if ($nombree=='' or $giroe=='' or $tipoe=='' or $actividadese=='' or $rfce=='' or $domicilioe=='' or $coloniae=='' or $codigoe=='' or $telefonoe=='' or $ciudade=='' or $emaile=='' or $misione=='' or $titulare=='' or $puestote=='' or $asesore=='' or $pasesore=='' or $acuerdoe=='' or $pacuerdoe=='' or $cartae=='' or $pcartae=='' or $ubicacion=='' )
 {
	print "Verificar datos vacios";	
}



else{ 






	$sql = $mysqli->query ( " UPDATE  empresa    SET 	NombreE='$nombree', GiroE='$giroe', TipoE='$tipoe', ActividadesE='$actividadese',  RFCE='$rfce', DomicilioE='$domicilioe', ColoniaE='$coloniae', CPE='$codigoe', TelefonoE='$telefonoe', CiudadE='$ciudade', EmailE='$emaile', MisionE='$misione',  NombreTE='$titulare', PuestoTE='$puestote' , AsesorE='$asesore', PuestoAE='$pasesore', PersonaAEE='$acuerdoe', 
		 PuestoAEE='$pacuerdoe', PersonaCE='$cartae', PuestoCE='$pcartae', ubicacion='$ubicacion'
	 where idempresa='$idempresa'")
	 or die("ERROR AL ACTUALIZAR LOS DATOS "); 
	 print "Los Datos han sido actualizados";	




if ($total ==1) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");   

}




if ($total ==2) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_2'");   

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_2'");  

$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_3'");  

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_4'");    

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




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_4'");    
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_5'");   
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
  $n_6 = $data[5]['no_control'];
  
  
  
  
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_1'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_2'");  
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_3'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_4'");    
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_5'");   
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso5='x'  where no_control='$n_6'");   
  

}
  









 

	}
?>	

	

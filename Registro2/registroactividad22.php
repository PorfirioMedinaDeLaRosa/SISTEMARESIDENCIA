<?php
	


			include'../conexion.php';
		    
			$no_control = $_POST['no_controla'];
			$carrera =  $_POST['actividad'];
			$email =  $_POST['descripcion'];	
			$telefono =  $_POST['fecha'];
			$fecha2 =  $_POST['fecha2'];
			$usuario =  $_POST['semanas'];


		


		

			$sql = $mysqli->query("insert into actividades (actividad , descripcion, fecha, fecha_termino, semanas, no_control, semana23, semana24, semana25, semana1A, semana2A, semana3A, semana4A, semana5A, semana6A, semana7A, semana8A, semana9A, semana10A, semana11A, semana12A, semana13A, semana14A, semana15A, semana16A, semana17A, semana18A, semana19A, semana20A, semana21A,  semana22A, semana23A, semana24A, semana25A, semana26A, semana26) values ( '$carrera', '$email',  '$telefono', '$fecha2', '$usuario', '$no_control', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario', '$usuario') ");



$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
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




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");   

}




if ($total ==2) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_2'");   

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_2'");  

$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_3'");  

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_4'");    

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




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_4'");    
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_5'");   
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
   
  
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_1'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_2'");  
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_3'");
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_4'");    
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_5'");   
  $sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso8='x'  where no_control='$n_6'");   
  
}



	header("Location:../ALUMNOS2/actividadeseditar.php");  


		
			
	?>	
<?php
	
include'../conexion.php';	



 
 $no_control = $_GET['no_control'];




$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);

echo "$total";



if ($total ==1) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");   

}




if ($total ==2) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_2'");   

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_2'");  

$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_3'");  

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





$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_4'");    

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




$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_4'");    
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_5'");   
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



$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_1'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_2'");  
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_3'");
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_4'");    
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_5'");   
$sql = $mysqli->query ( " UPDATE  tb_residentes  SET 	paso10='x'  where no_control='$n_6'");   


}


header("Location:../ALUMNOS2/menusolicitud.php");  
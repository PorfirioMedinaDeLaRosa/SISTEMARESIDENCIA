<?php
 include ('plantillareportefinal.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

  $no_control = $_GET['no_control'];
  $nombre = $_GET['nombre'];
  $carrera = $_GET['carrera'];

   include'../conexion.php'; 

 $sql="SELECT proyectos.nombreP , proyectos.periodop, proyectos.fechatermino , proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoInicio, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoTermino  FROM proyectos, asignacionproyecto WHERE asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control ='$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {

  $pdf->SetFont('Arial','B',11);
  $pdf->SetXY(17, 40);
  $pdf->Cell(0,5, utf8_decode("FORMATO DE EVALUACIÓN FINAL DE RESIDENCIA PROFESIONAL"),0,1,'C'); 
  


  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15,46);
  $pdf->Cell(0,5, utf8_decode("Nombre del Residente: ".(trim($nombre))),0,1,'la');
  
  //$pdf->SetXY(52, 35);
  //$pdf->MultiCell(78,3,  utf8_decode($nombre));


  $pdf->SetXY(132,45.5);
  $pdf->Cell(0,5, utf8_decode("Número de Control: ". utf8_decode(trim($no_control))),0,1,'la');
  
  //$pdf->SetXY(172, 35);
  //$pdf->Cell(0,5,  utf8_decode(trim($no_control)),0,0,'la');


 $pdf->SetXY(15,53);
  $pdf->Cell(0,5, utf8_decode("Nombre del Proyecto:"),0,1,'la');
  $pdf->SetFont('Arial','B',9);
  $pdf->SetXY(50, 53.5);
  $pdf->MultiCell(133,4, utf8_decode(trim($row['nombreP'])));


$pdf->SetFont('Arial','',10);

  $pdf->SetXY(15,64);
  $pdf->Cell(75,5, utf8_decode("Programa Educativo: ".trim($carrera)),0,1,'la');
  
  //$pdf->SetXY(48, 54);
  //$pdf->Cell(0,5,  utf8_decode(trim($carrera)),0,0,'la');

  $pdf->SetXY(15,72);
  $pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional: ".utf8_decode($row['DiaInicio']." de ".$row['MesInicio']." de ".$row['AnoInicio']." al ".$row['DiaTermino']." de ".$row['MesTermino']." de ".$row['AnoTermino'])),0,1,'la');
  //$pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional: 29 de Agosto de 2023 al 29 de Abril de 2024"),0,1,'la');
 
 // $pdf->SetXY(97, 61);
 // $pdf->MultiCell(90,3,  utf8_decode($row['DiaInicio']." de   ".$row['MesInicio']." de   ".$row['AnoInicio']." al    ".$row['DiaTermino']." de   ".$row['MesTermino']." de   ".$row['AnoTermino']));


}



$sql="SELECT * from reportesasesor WHERE no_control ='$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  
$pdf->SetXY(15, 82);
$pdf->Cell(42,17,  utf8_decode(""),1,1,'la');

$pdf->SetXY(57, 82);
$pdf->Cell(42,17,  utf8_decode(""),1,1,'la');
$pdf->SetXY(64, 77);
$pdf->Cell(40,17,  utf8_decode("VALOR DE LA"),0,0,'la');
$pdf->SetXY(63, 81);
$pdf->Cell(39,17,  utf8_decode("CALIFICACIÓN"),0,0,'la');
$pdf->SetXY(73, 85);
$pdf->Cell(40,17,  utf8_decode("(A)"),0,0,'la');

$pdf->SetXY(99, 93);
$pdf->Cell(42,17,  utf8_decode($row['calificacionR1']),0,0,'C');


$pdf->SetXY(141, 93);
$pdf->Cell(40,17,  utf8_decode($row['calificacionR1']*.10),0,0,'C');



}


$sql="SELECT * from reportesasesor WHERE no_control ='$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {

$pdf->SetXY(99, 82);
$pdf->Cell(42,17,  utf8_decode(""),1,1,'la');
$pdf->SetXY(98.8, 77);
$pdf->Cell(40,17,  utf8_decode("CALIFICACIÓN PARCIAL "),0,0,'la');
$pdf->SetXY(109, 81);
$pdf->Cell(39.5,17,  utf8_decode("OBTENIDA"),0,0,'la');
$pdf->SetXY(115, 85);
$pdf->Cell(40,17,  utf8_decode("(B)"),0,0,'la');

$pdf->SetXY(99, 118);
$pdf->Cell(42,17,  utf8_decode($row['calificacionR2']),0,0,'C');


$pdf->SetXY(141, 118);
$pdf->Cell(40,17,  utf8_decode($row['calificacionR2']*.10),0,0,'C');

}

$pdf->SetXY(141, 82);
$pdf->Cell(40,17,  utf8_decode(""),1,1,'la');
$pdf->SetXY(148, 77);
$pdf->Cell(39.5,17,  utf8_decode("RESULTADO"),0,0,'la');
$pdf->SetXY(154, 82);
$pdf->Cell(40,17,  utf8_decode("(A * B)"),0,0,'la');


$pdf->SetXY(15, 99);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(25, 94);
$pdf->Cell(40,17,  utf8_decode("PRIMERA "),0,0,'la');
$pdf->SetXY(20, 98);
$pdf->Cell(39.5,17,  utf8_decode("CALIFICACIÓN"),0,0,'la');
$pdf->SetXY(22, 102);
$pdf->Cell(40,17,  utf8_decode("PARCIAL DE "),0,0,'la');
$pdf->SetXY(20, 106);
$pdf->Cell(40,17,  utf8_decode("EVALUACIÓN Y "),0,0,'la');
$pdf->SetXY(20, 110);
$pdf->Cell(40,17,  utf8_decode("SEGUIMIENTO"),0,0,'la');
$pdf->SetXY(57, 99);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(73, 93);
$pdf->Cell(40,17,  utf8_decode("10%"),0,0,'la');
$pdf->SetXY(99, 99);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(141, 99);
$pdf->Cell(40,24,  utf8_decode(""),1,1,'la'); 





$pdf->SetXY(15, 123);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(25, 118);
$pdf->Cell(40,17,  utf8_decode("SEGUNDA"),0,0,'la');
$pdf->SetXY(20, 122);
$pdf->Cell(39.5,17,  utf8_decode("CALIFICACIÓN"),0,0,'la');
$pdf->SetXY(22, 126);
$pdf->Cell(40,17,  utf8_decode("PARCIAL DE "),0,0,'la');
$pdf->SetXY(20, 130);
$pdf->Cell(40,17,  utf8_decode("EVALUACIÓN Y "),0,0,'la');
$pdf->SetXY(20, 135);
$pdf->Cell(40,17,  utf8_decode("SEGUIMIENTO"),0,0,'la');
$pdf->SetXY(57, 123);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(73, 118);
$pdf->Cell(40,17,  utf8_decode("10%"),0,0,'la');
$pdf->SetXY(99, 123);
$pdf->Cell(42,24,  utf8_decode(""),1,1,'la');
$pdf->SetXY(141, 123);
$pdf->Cell(40,24,  utf8_decode(""),1,1,'la'); 




$sql="SELECT * from reportesasesor WHERE no_control ='$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {

$pdf->SetXY(15, 147);
$pdf->Cell(42,10,  utf8_decode(""),1,1,'la');
$pdf->SetXY(17, 142);
$pdf->Cell(40,17,  utf8_decode("CALIFICACIÓN FINAL"),0,0,'la');
$pdf->SetXY(20, 146);
$pdf->Cell(39.5,17,  utf8_decode("DE REPORTE"),0,0,'la');
$pdf->SetXY(57, 147);
$pdf->Cell(42,10,  utf8_decode(""),1,1,'la');
$pdf->SetXY(73, 142);
$pdf->Cell(40,17,  utf8_decode("80%"),0,0,'la');
$pdf->SetXY(99, 147);
$pdf->Cell(42,10,  utf8_decode(""),1,1,'la');
$pdf->SetXY(141, 147);
$pdf->Cell(40,10,  utf8_decode(""),1,1,'la'); 
$pdf->SetXY(99, 143);
$pdf->Cell(42,17,  utf8_decode($row['calificacionRF']),0,0,'C');
$pdf->SetXY(141, 143);
$pdf->Cell(40,17,  utf8_decode($row['calificacionRF']*.80),0,0,'C');



$pdf->SetXY(15, 157);
$pdf->Cell(42,8,  utf8_decode(""),1,1,'la');

$pdf->SetXY(57, 157);
$pdf->Cell(84,8,  utf8_decode(""),1,1,'la');
$pdf->SetXY(59, 153);
$pdf->Cell(82,17,  utf8_decode("SUMA DE LAS TRES EVALUACIONES"),0,0,'la');

$pdf->SetXY(141, 157);
$pdf->Cell(40,8,  utf8_decode(""),1,1,'la'); 
$valor1 = $row['calificacionR1']*.10;
$valor2 = $row['calificacionR2']*.10;
$valor3 = $row['calificacionRF']*.80;
$valor = 5.25;

$pdf->SetXY(157, 157);
$pdf->Cell(40,8,  utf8_decode($valor1 + $valor2 +  $valor3),0,0,'la'); 



$pdf->SetXY(15, 165);
$pdf->Cell(42,8,  utf8_decode(""),1,1,'la');

$pdf->SetXY(57, 165);
$pdf->Cell(84,8,  utf8_decode(""),1,1,'la');
$pdf->SetXY(59, 161);
$pdf->Cell(82,17,  utf8_decode("CALIFICACIÓN FINAL OBTENIDA"),0,0,'la');

$pdf->SetXY(141, 165);
$pdf->Cell(40,8,  utf8_decode(""),1,1,'la'); 

$pdf->SetXY(157, 165);

$calificacionfinal = $valor1 + $valor2 +  $valor3;

if($calificacionfinal < 70){
  $pdf->Cell(40,8,  utf8_decode("NA"),0,0,'la'); 
}
if($calificacionfinal >= 70){
  $pdf->Cell(40,8,  utf8_decode(round($valor1 + $valor2 +  $valor3)),0,0,'la'); 
}

//$pdf->Cell(40,8,  utf8_decode(),0,0,'la'); 

}
$consultap="SELECT  *  FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consultap = $mysqli->query($consultap);
  while($numerop=mysqli_fetch_array($consultap))
  {

 $numeroproyecto=$numerop['no_controlp'];

}




$consultap2="SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
  $consultap2 = $mysqli->query($consultap2);
  while($numerop2=mysqli_fetch_array($consultap2))
  {

 $numeroproyecto2=$numerop2['idproyecto'];

}






$consultap2="SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
  $consultap2 = $mysqli->query($consultap2);
  while($numerop2=mysqli_fetch_array($consultap2))
  {

 $numeroproyecto2=$numerop2['idproyecto'];

}






$consultap3="SELECT  *  FROM  numerodeasesores WHERE  numerodeasesores.IdAS4='$numeroproyecto2'";
  $consultap3 = $mysqli->query($consultap3);
  while($numerop3=mysqli_fetch_array($consultap3))
  {

 $numeroproyecto3=$numerop3['IdAS4'];

}


$numero2="SELECT * from numerodeasesores  WHERE IdAS4 ='$numeroproyecto3' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);





if ($total =='1') {



$sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


while($dNA = mysqli_fetch_assoc($sqlNA))  {$dataNA[] = $dNA;}

$nNA_1 = $dataNA[0]['IdAS'];






  $sql2A="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

 $rec2A = $mysqli->query($sql2A);
  while($row2A=mysqli_fetch_array($rec2A))
  {


$pdf->SetXY(15, 192);
$pdf->Cell(58,10,  utf8_decode(""),1,1,'la');

$pdf->SetXY(15, 192);
$pdf->Cell(58,10,  utf8_decode("ELABORA"),1,0,'C');

$pdf->SetXY(73, 192);
$pdf->Cell(58,10,  utf8_decode(""),1,1,'la');


$pdf->SetXY(15, 215);
$pdf->Cell(86,13,  utf8_decode(""),0,0,'LA');
$pdf->SetXY(17, 217);
$pdf->MultiCell(53,4.5, utf8_decode($row2A['NombreAS']),'C');

}
}
$pdf->SetXY(73, 192);
$pdf->Cell(58,10,  utf8_decode("SELLO DE LA DIVISIÓN"),1,0,'C');

$pdf->SetXY(131, 192);
$pdf->Cell(58,10,  utf8_decode(""),1,1,'la'); 

$pdf->SetXY(131, 192);
$pdf->Cell(58,10,  utf8_decode("VERIFICA"),1,0,'C');


$pdf->SetXY(15, 202);
$pdf->Cell(58,25,  utf8_decode(""),1,1,'la');

$pdf->SetXY(73, 202);
$pdf->Cell(58,25,  utf8_decode(""),1,1,'la');
$pdf->SetXY(84, 215);
$pdf->Cell(86,17,  utf8_decode("Sello de la División"),0,0,'LA');
$pdf->SetXY(131, 202);
$pdf->Cell(58,25,  utf8_decode(""),1,1,'la'); 



$sql="SELECT * from divisiones WHERE CarreraD ='$carrera'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {



$pdf->SetXY(137, 205);

 

$pdf->SetXY(148, 214);
$pdf->Cell(50,3, (date("d-m-Y")));

//$pdf->Cell(50,3, ("29-04-2024"));

$pdf->SetXY(135, 218);
$pdf->MultiCell(50,4.0,  utf8_decode($row['NombreD']),'C');


}
 $pdf->Output();
  
 ?>
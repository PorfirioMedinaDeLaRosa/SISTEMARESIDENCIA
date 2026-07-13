<?php
include('plantillareporte.php');

$pdf = new  PDF();
$pdf->SetMargins(20, 20);
$pdf->AddPage();

$no_control = $_GET['no_control'];
$nombre = $_GET['nombre'];
$carrera = $_GET['carrera'];

include '../conexion.php';

$sql = "SELECT proyectos.nombreP ,  proyectos.periodop, proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoInicio, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoTermino, proyectos.fechatermino FROM proyectos, asignacionproyecto WHERE asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control ='$no_control'";

$rec = $mysqli->query($sql);
while ($row = mysqli_fetch_array($rec)) {

  $pdf->SetFont('Arial', 'B', 11);
  $pdf->SetXY(15, 36);
  $pdf->Cell(0, 5, utf8_decode("FORMATO DE EVALUACIÓN Y SEGUIMIENTO DE RESIDENCIA PROFESIONAL"), 0, 1, 'C');

  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(15, 42);
  $pdf->Cell(0, 5, utf8_decode("Nombre del Residente:"), 0, 1, 'la');

  $pdf->SetFont('Arial', '', 8.5);
  $pdf->SetXY(52, 43);
  $pdf->MultiCell(78, 3,  utf8_decode($nombre));

  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(141, 42);
  $pdf->Cell(0, 5, utf8_decode("Número de  Control:"), 0, 1, 'la');

  $pdf->SetXY(173, 42);
  $pdf->Cell(0, 5,  utf8_decode($no_control), 0, 0, 'la');



  $contarproyecto = strlen($row['nombreP']);
  
  if ($contarproyecto >= 0 and $contarproyecto <= 95) {
    $pdf->SetXY(15, 48);
    $pdf->Cell(0, 5, utf8_decode("Nombre del Proyecto:"), 0, 1, 'la');
    $pdf->SetFont('Arial', 'B', 8.5);
    $pdf->SetXY(50, 49.5);
    $pdf->MultiCell(143, 2.5, utf8_decode($row['nombreP']));

    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(15, 54);
    $pdf->Cell(75, 5, utf8_decode("Programa Educativo:"), 0, 1, 'la');

    $pdf->SetXY(48, 54);
    $pdf->Cell(0, 5,  utf8_decode($carrera), 0, 0, 'la');

    $pdf->SetXY(15, 61);
    $pdf->Cell(0, 5, utf8_decode("Periodo de realización de la Residencia Profesional:"), 0, 1, 'la');

    $pdf->SetXY(98, 61);
    $pdf->Cell(0, 5,  utf8_decode($row['DiaInicio'] . " de " . $row['MesInicio'] . " de " . $row['AnoInicio'] . " al " . $row['DiaTermino'] . " de " . $row['MesTermino'] . " de " . $row['AnoTermino']), 0, 0, 'la');
    //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');

    $pdf->SetXY(15, 68);
    $pdf->Cell(0, 5, utf8_decode("Calificación Parcial (promedio de ambas evaluaciones):"), 0, 1, 'la');
    $pdf->SetXY(102.5, 67.5);
    $pdf->Cell(0, 5, utf8_decode("____________________________________________"), 0, 0, 'la');
    $pdf->SetXY(15, 61);
  }

  if ($contarproyecto >95) {
    $pdf->SetXY(15, 47);
    $pdf->Cell(0, 5, utf8_decode("Nombre del Proyecto: "), 0, 1, 'la');
    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetXY(49.5, 47.5);
    $pdf->MultiCell(144, 2.5, utf8_decode($row['nombreP']));

    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(15, 57.5);
    $pdf->Cell(75, 5, utf8_decode("Programa Educativo:"), 0, 1, 'la');

    $pdf->SetXY(48, 57.5);
    $pdf->Cell(0, 5,  utf8_decode($carrera), 0, 0, 'la');

    $pdf->SetXY(15, 62);
    $pdf->Cell(0, 5, utf8_decode("Periodo de realización de la Residencia Profesional:"), 0, 1, 'la');

    $pdf->SetXY(98, 62);
    $pdf->Cell(0, 5,  utf8_decode($row['DiaInicio'] . " de " . $row['MesInicio'] . " de " . $row['AnoInicio'] . " al " . $row['DiaTermino'] . " de " . $row['MesTermino'] . " de " . $row['AnoTermino']), 0, 0, 'la');
    //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');

    $pdf->SetXY(15, 69);
    $pdf->Cell(0, 5, utf8_decode("Calificación Parcial (promedio de ambas evaluaciones):"), 0, 1, 'la');
    $pdf->SetXY(102.5, 68.5);
    $pdf->Cell(0, 5, utf8_decode("____________________________________________"), 0, 0, 'la');
    $pdf->SetXY(15, 61);
  }


}


$pdf->Ln();
$pdf->SetXY(15, 75);
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 75);
$pdf->CellFitSpace(0, 5, utf8_decode("                                           En qué medida el residente cumple con lo siguiente"), 1, 1, 'L');

$pdf->SetXY(15, 80);
$pdf->Cell(140, 5, utf8_decode("                                                   Criterios a evaluar"), 1, 1, 'la');

$pdf->SetXY(155, 80);
$pdf->Cell(15, 5, utf8_decode("Valor"), 1, 1, 'la');

$pdf->SetXY(170, 80);
$pdf->Cell(20, 5, utf8_decode("Evaluación"), 1, 1, 'la');

$pdf->SetXY(20, 85);
$pdf->Cell(135, 5, utf8_decode("Asiste puntualmente en el horario establecido "), 1, 1, 'la');


$pdf->SetXY(155, 85);
$pdf->Cell(15, 5, utf8_decode("      5"), 1, 1, 'la');

$pdf->SetXY(170, 85);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 90);
$pdf->Cell(135, 5, utf8_decode("Trabaja en equipo y se comunica de forma efectiva (oral y escrita) "), 1, 1, 'la');


$pdf->SetXY(155, 90);
$pdf->Cell(15, 5, utf8_decode("     10"), 1, 1, 'la');

$pdf->SetXY(170, 90);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 95);
$pdf->Cell(135, 5, utf8_decode("Tiene iniciativa para colaborar  "), 1, 1, 'la');


$pdf->SetXY(155, 95);
$pdf->Cell(15, 5, utf8_decode("      5"), 1, 1, 'la');

$pdf->SetXY(170, 95);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');



$pdf->SetXY(20, 100);
$pdf->Cell(135, 5, utf8_decode("Propone mejoras al proyecto  "), 1, 1, 'la');


$pdf->SetXY(155, 100);
$pdf->Cell(15, 5, utf8_decode("     10"), 1, 1, 'la');

$pdf->SetXY(170, 100);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');




$pdf->SetXY(20, 105);
$pdf->Cell(135, 5, utf8_decode("Cumple con los objetivos correspondientes al proyecto  "), 1, 1, 'la');


$pdf->SetXY(155, 105);
$pdf->Cell(15, 5, utf8_decode("     15"), 1, 1, 'la');

$pdf->SetXY(170, 105);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');



$pdf->SetXY(20, 110);
$pdf->Cell(135, 9, (""), 1, 1, 'la');
$pdf->SetXY(20, 111);
$pdf->MultiCell(135, 4,  utf8_decode("Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos establecidos del cronograma "));

$pdf->SetXY(155, 110);
$pdf->Cell(15, 9, utf8_decode("     15"), 1, 1, 'la');

$pdf->SetXY(170, 110);
$pdf->Cell(20, 9, utf8_decode(""), 1, 1, 'la');





$pdf->SetXY(20, 119);
$pdf->Cell(135, 5, utf8_decode("Demuestra liderazgo en su actuar "), 1, 1, 'la');


$pdf->SetXY(155, 119);
$pdf->Cell(15, 5, utf8_decode("     10"), 1, 1, 'la');

$pdf->SetXY(170, 119);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 124);
$pdf->Cell(135, 5, utf8_decode("Demuestra conocimiento en el área de su especialidad "), 1, 1, 'la');


$pdf->SetXY(155, 124);
$pdf->Cell(15, 5, utf8_decode("     20"), 1, 1, 'la');

$pdf->SetXY(170, 124);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 129);
$pdf->Cell(135, 9, utf8_decode(""), 1, 1, 'la');
$pdf->SetXY(20, 130);
$pdf->MultiCell(135, 3,  utf8_decode("Demuestra un comportamiento ético (es disciplinado, acata órdenes, respeta a sus compañeros de trabajo, entre otros) "));


$pdf->SetXY(155, 129);
$pdf->Cell(15, 9, utf8_decode("     10"), 1, 1, 'la');

$pdf->SetXY(170, 129);
$pdf->Cell(20, 9, utf8_decode(""), 1, 1, 'la');



$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(20, 138);
$pdf->Cell(135, 5, utf8_decode("                                                                                                           Calificación total"), 1, 1, 'la');


$pdf->SetXY(155, 138);
$pdf->Cell(15, 5, utf8_decode("     100"), 1, 1, 'la');

$pdf->SetXY(170, 138);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');

$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(15, 85);
$pdf->Cell(5, 58,  utf8_decode(""), 1, 1, 'la');
$pdf->SetXY(15, 60);




$pdf->SetXY(15, 144);
$pdf->Cell(0, 5, utf8_decode("Observaciones:"), 0, 1, 'la');
$pdf->SetXY(40, 144);
$pdf->Cell(0, 5, utf8_decode("____________________________________________________________________________"), 0, 1, 'la');

$pdf->SetXY(15, 148);
$pdf->Cell(0, 5, utf8_decode("_________________________________________________________________________________________"), 0, 1, 'la');


$sql2 = "SELECT empresa.AsesorE  FROM empresa, asignacionempresa WHERE asignacionempresa.no_controle = empresa.no_control AND asignacionempresa.no_control ='$no_control'";

$rec2 = $mysqli->query($sql2);
while ($row2 = mysqli_fetch_array($rec2)) {


  $asesorcontar  = strlen($row2['AsesorE']);
  if ($asesorcontar > 0 and $asesorcontar <= 30) {
    $pdf->SetXY(15, 155);
    $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
    $pdf->SetXY(17, 170.5);
    $pdf->MultiCell(55, 3,  utf8_decode($row2['AsesorE']), 0, 'C', 0);
  }
  if ($asesorcontar > 30 and $asesorcontar <= 60) {
    $pdf->SetXY(15, 155);
    $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
    $pdf->SetXY(17, 169);
    $pdf->MultiCell(55, 3.5,  utf8_decode($row2['AsesorE']), 0, 'C', 0);
  }

  $pdf->SetXY(74, 155);
  $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
  $pdf->SetXY(74, 163);
  $pdf->Cell(57, 20,  utf8_decode("Sello de la empresa"), 0, 0, 'C');

  $pdf->SetXY(133, 155);
  $pdf->Cell(57, 20,  utf8_decode(""), 1, 1, 'la');
  $pdf->SetXY(133, 163);
  $pdf->Cell(57, 20,  utf8_decode("Fecha de evaluación"), 0, 0, 'C');
}


//TABLA DOS

$pdf->SetXY(15, 180);
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 180);
$pdf->CellFitSpace(0, 5, utf8_decode("                                           En qué medida el residente cumple con lo siguiente"), 1, 1, 'L');


$pdf->SetXY(15, 185);
$pdf->Cell(140, 5, utf8_decode("                                                   Criterios a evaluar"), 1, 1, 'la');

$pdf->SetXY(155, 185);
$pdf->Cell(15, 5, utf8_decode("Valor"), 1, 1, 'la');
$pdf->SetXY(170, 185);
$pdf->Cell(20, 5, utf8_decode("Evaluación"), 1, 1, 'la');

$pdf->SetXY(20, 190);
$pdf->Cell(135, 5, utf8_decode("Asistió puntualmente a las reuniones de asesoría "), 1, 1, 'la');
$pdf->SetXY(155, 190);
$pdf->Cell(15, 5, utf8_decode("     10"), 1, 1, 'la');
$pdf->SetXY(170, 190);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');

$pdf->SetXY(20, 195);
$pdf->Cell(135, 5, utf8_decode("Demuestra conocimiento en el área de su especialidad "), 1, 1, 'la');
$pdf->SetXY(155, 195);
$pdf->Cell(15, 5, utf8_decode("     20"), 1, 1, 'la');
$pdf->SetXY(170, 195);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 200);
$pdf->Cell(135, 5, utf8_decode("Trabaja en equipo y se comunica de forma efectiva (oral y escrita) "), 1, 1, 'la');
$pdf->SetXY(155, 200);
$pdf->Cell(15, 5, utf8_decode("     15"), 1, 1, 'la');
$pdf->SetXY(170, 200);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 205);
$pdf->Cell(135, 5, utf8_decode("Es dedicado y proactivo en las actividades encomendadas "), 1, 1, 'la');
$pdf->SetXY(155, 205);
$pdf->Cell(15, 5, utf8_decode("     20"), 1, 1, 'la');
$pdf->SetXY(170, 205);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 210);
$pdf->Cell(135, 9, utf8_decode(""), 1, 1, 'la');
$pdf->SetXY(20, 211);
$pdf->MultiCell(134, 4,  utf8_decode("Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos establecidos en el cronograma "));
$pdf->SetXY(155, 210);
$pdf->Cell(15, 9, utf8_decode("     20"), 1, 1, 'la');
$pdf->SetXY(170, 210);
$pdf->Cell(20, 9, utf8_decode(""), 1, 1, 'la');


$pdf->SetXY(20, 219);
$pdf->Cell(135, 5, utf8_decode("Propone mejoras al proyecto  "), 1, 1, 'la');
$pdf->SetXY(155, 219);
$pdf->Cell(15, 5, utf8_decode("     15"), 1, 1, 'la');
$pdf->SetXY(170, 219);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(20, 224);
$pdf->Cell(135, 5, utf8_decode("                                                                                                          Calificación total "), 1, 1, 'la');
$pdf->SetXY(155, 224);
$pdf->Cell(15, 5, utf8_decode("    100"), 1, 1, 'la');
$pdf->SetXY(170, 224);
$pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'la');



$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 185);
$pdf->Cell(5, 44,  utf8_decode(""), 1, 1, 'la');



$pdf->SetXY(15, 233);
$pdf->Cell(0, 5, utf8_decode("Observaciones:"), 0, 1, 'la');
$pdf->SetXY(40, 233);
$pdf->Cell(0, 5, utf8_decode("____________________________________________________________________________"), 0, 1, 'la');




$consultap = "SELECT  *  FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
$consultap = $mysqli->query($consultap);
while ($numerop = mysqli_fetch_array($consultap)) {

  $numeroproyecto = $numerop['no_controlp'];
}




$consultap2 = "SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
$consultap2 = $mysqli->query($consultap2);
while ($numerop2 = mysqli_fetch_array($consultap2)) {

  $numeroproyecto2 = $numerop2['idproyecto'];
}






$consultap2 = "SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
$consultap2 = $mysqli->query($consultap2);
while ($numerop2 = mysqli_fetch_array($consultap2)) {

  $numeroproyecto2 = $numerop2['idproyecto'];
}






$consultap3 = "SELECT  *  FROM  numerodeasesores WHERE  numerodeasesores.IdAS4='$numeroproyecto2'";
$consultap3 = $mysqli->query($consultap3);
while ($numerop3 = mysqli_fetch_array($consultap3)) {

  $numeroproyecto3 = $numerop3['IdAS4'];
}


$numero2 = "SELECT * from numerodeasesores  WHERE IdAS4 ='$numeroproyecto3' ";
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);


if ($total == '1') {



  $sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


  while ($dNA = mysqli_fetch_assoc($sqlNA)) {
    $dataNA[] = $dNA;
  }

  $nNA_1 = $dataNA[0]['IdAS'];






  $sql2A = "SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

  $rec2A = $mysqli->query($sql2A);
  while ($row2A = mysqli_fetch_array($rec2A)) {

    $asesorintcontar  = strlen($row2A['NombreAS']);
    if ($asesorintcontar > 0 and $asesorintcontar <= 32) {

      $pdf->SetFont('Arial', '', 9);
      $pdf->SetXY(15, 243);
      $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
      $pdf->SetXY(16.5, 257);
      $pdf->MultiCell(55, 3,  utf8_decode($row2A['NombreAS']), 0, 'C', 0);
    }
    if ($asesorintcontar > 32 and $asesorintcontar <= 70) {

      $pdf->SetFont('Arial', '', 9);
      $pdf->SetXY(15, 243);
      $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
      $pdf->SetXY(16.5, 255);
      $pdf->MultiCell(55, 3.5,  utf8_decode($row2A['NombreAS']), 0, 'C', 0);
    }
    $pdf->SetXY(74, 243);
    $pdf->Cell(59, 20,  utf8_decode(""), 1, 1, 'la');
    $pdf->SetXY(74, 251);
    $pdf->Cell(57, 20,  utf8_decode("Sello de la institución"),0, 0, 'C');

    $pdf->SetXY(133, 243);
    $pdf->Cell(57, 20,  utf8_decode(""), 1, 1, 'la');
    $pdf->SetXY(133, 251);
    $pdf->Cell(57, 20,  utf8_decode("Fecha de evaluación"), 0, 0, 'C');
  }
}


/*
  
if ($total =='2') {



$sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


while($dNA = mysqli_fetch_assoc($sqlNA))  {$dataNA[] = $dNA;}

$nNA_1 = $dataNA[0]['IdAS'];
$nNA_2 = $dataNA[1]['IdAS'];






  $sql2A="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

 $rec2A = $mysqli->query($sql2A);
  while($row2A=mysqli_fetch_array($rec2A))
  {

 
 

  
  
  $pdf->SetFont('Arial','',9);
  $pdf->SetXY(15, 238);
  $pdf->Cell(59,30,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 263);
  $pdf->MultiCell(57,3,  utf8_decode($row2A['NombreAS']));


  $pdf->SetXY(74, 238);
  $pdf->Cell(59,30,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(86, 250);
  $pdf->Cell(57,20,  utf8_decode("Sello de la institución"),0,0,'la');

  $pdf->SetXY(133, 238);
  $pdf->Cell(57,30,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(146, 250);
  $pdf->Cell(57,20,  utf8_decode("Fecha de evaluación"),0,0,'la');
}




$sql2AA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_2' ";

 $rec2AA = $mysqli->query($sql2AA);
  while($row2AA=mysqli_fetch_array($rec2AA))
  {

 
 

  
  
  $pdf->SetFont('Arial','',9);
  $pdf->SetXY(15, 238);
  $pdf->Cell(59,30,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 249);
  $pdf->MultiCell(57,3,  utf8_decode($row2AA['NombreAS']));



}}



if ($total =='3') {



$sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


while($dNA = mysqli_fetch_assoc($sqlNA))  {$dataNA[] = $dNA;}

$nNA_1 = $dataNA[0]['IdAS'];
$nNA_2 = $dataNA[1]['IdAS'];
$nNA_3 = $dataNA[2]['IdAS'];





  $sql2A="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

 $rec2A = $mysqli->query($sql2A);
  while($row2A=mysqli_fetch_array($rec2A))
  {

 
  $pdf -> AddPage();
  $pdf->SetFont('Arial','',9);
  $pdf->SetXY(15, 35);
  $pdf->Cell(59,43,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 74);
  $pdf->MultiCell(57,3,  utf8_decode($row2A['NombreAS']));


  $pdf->SetXY(74, 35);
  $pdf->Cell(59,43,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(86, 62);
  $pdf->Cell(57,20,  utf8_decode("Sello de la institución"),0,0,'la');

  $pdf->SetXY(133, 35);
  $pdf->Cell(57,43,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(146, 62);
  $pdf->Cell(57,20,  utf8_decode("Fecha de evaluación"),0,0,'la');
}




$sql2AA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_2' ";

 $rec2AA = $mysqli->query($sql2AA);
  while($row2AA=mysqli_fetch_array($rec2AA))
  {

 
 

  
  
  $pdf->SetFont('Arial','',9);
  $pdf->SetXY(15, 35);
  $pdf->Cell(59,43,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 60);
  $pdf->MultiCell(57,3,  utf8_decode($row2AA['NombreAS']));



}




$sql2AAA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_3' ";

 $rec2AAA = $mysqli->query($sql2AAA);
  while($row2AAA=mysqli_fetch_array($rec2AAA))
  {

 
 

  
  
  $pdf->SetFont('Arial','',9);
  $pdf->SetXY(15, 35);
  $pdf->Cell(59,43,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 45);
  $pdf->MultiCell(57,3,  utf8_decode($row2AAA['NombreAS']));



}








}



*/












$pdf->Output();

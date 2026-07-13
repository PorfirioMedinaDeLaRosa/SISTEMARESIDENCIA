<?php
 include ('plantillareporte.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

$pdf->SetFont('Arial','B',10.5);
  $pdf->SetXY(15, 38);
   $pdf->Cell(0,5, utf8_decode("FORMATO DE EVALUACIÓN Y SEGUIMIENTO DE RESIDENCIA PROFESIONAL"),0,1,'C'); 


  $no_control = $_GET['no_control'];
  $nombre = $_GET['nombre'];
  $carrera = $_GET['carrera'];
include'../conexion.php'; 

 $sql="SELECT proyectos.nombreP , proyectos.periodop , proyectos.fechatermino, proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoInicio, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoTermino FROM proyectos, asignacionproyecto WHERE asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control ='$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {

  
  
$pdf->SetFont('Arial','',10);
  $pdf->SetXY(15,44);
  $pdf->Cell(0,5, utf8_decode("Nombre del Residente:"),0,1,'la');
  $pdf->SetXY(52, 45);
  $pdf->MultiCell(78,3,  utf8_decode($nombre));
  $pdf->SetXY(140,44);
  $pdf->Cell(0,5, utf8_decode("Número de  Control:"),0,1,'la');
  $pdf->SetXY(172, 44);
  $pdf->Cell(0,5,  utf8_decode($no_control),0,0,'la');

  $contarproyecto = strlen($row['nombreP']);
  

  if ($contarproyecto >= 0 and $contarproyecto <= 80) {
    $pdf->SetXY(15,50);
    $pdf->Cell(0,5, utf8_decode("Nombre del Proyecto:"),0,1,'la');
    $pdf->SetXY(50, 50.5);
    $pdf->SetFont('Arial','B',10);
    $pdf->MultiCell(140,3, utf8_decode( trim($row['nombreP'])) );
    $pdf->SetXY(15,60.5);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(75,5, utf8_decode("Programa Educativo:"),0,1,'la');
    $pdf->SetXY(49, 60.5);
    $pdf->Cell(0,5,  utf8_decode($carrera),0,0,'la');
    $pdf->SetXY(15,69);
    $pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional:"),0,1,'la');
    $pdf->SetXY(98, 69);
    //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');
    $pdf->Cell(0,5,  utf8_decode($row['DiaInicio']." de   ".$row['MesInicio']." de   ".$row['AnoInicio']." al    ".$row['DiaTermino']." de   ".$row['MesTermino']." de   ".$row['AnoTermino']),0,0,'la');
    $pdf->SetXY(15,79);
    $pdf->Cell(0,5, utf8_decode("Calificación Final (promedio de ambas evaluaciones):"),0,1,'la');
    $pdf->SetXY(103,79);
    $pdf->Cell(0,5, utf8_decode("____________________________________________"),0,0,'la');
    }

  if ($contarproyecto > 80) {
  $pdf->SetXY(15,50);
  $pdf->Cell(0,5, utf8_decode("Nombre del Proyecto:"),0,1,'la');
  $pdf->SetXY(50, 50.5);
  $pdf->SetFont('Arial','B',10);
  $pdf->MultiCell(140,3.5, utf8_decode( trim($row['nombreP'])) );
  $pdf->SetXY(15,66);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(75,5, utf8_decode("Programa Educativo:"),0,1,'la');
  $pdf->SetXY(49, 66);
  $pdf->Cell(0,5,  utf8_decode($carrera),0,0,'la');
  $pdf->SetXY(15,71);
  $pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional:"),0,1,'la');
  $pdf->SetXY(98, 71);
  //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');
  $pdf->Cell(0,5,  utf8_decode($row['DiaInicio']." de   ".$row['MesInicio']." de   ".$row['AnoInicio']." al    ".$row['DiaTermino']." de   ".$row['MesTermino']." de   ".$row['AnoTermino']),0,0,'la');
  $pdf->SetXY(15,79);
  $pdf->Cell(0,5, utf8_decode("Calificación Final (promedio de ambas evaluaciones):"),0,1,'la');
  $pdf->SetXY(100,79);
  $pdf->Cell(0,5, utf8_decode("_____________________________________________"),0,0,'la');
  }
  
}
  

  $pdf->Ln();
  $pdf->SetXY(15, 89);
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15,89);
  $pdf->CellFitSpace(0,5, utf8_decode("                                           En qué medida el residente cumple con lo siguiente"),1,1,'L');
  
  $pdf->SetXY(15,94);
  $pdf->Cell(140,5, utf8_decode("                                                   Criterios a evaluar"),1,1,'la');

  $pdf->SetXY(155,94);
  $pdf->Cell(15,5, utf8_decode("Valor"),1,1,'la');

  $pdf->SetXY(170,94);
  $pdf->Cell(20,5, utf8_decode("Evaluación"),1,1,'la');


  $pdf->SetXY(20,99);
  $pdf->Cell(135,5, utf8_decode("Portada."),1,1,'la');


  $pdf->SetXY(155,99);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,99);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,104);
  $pdf->Cell(135,5, utf8_decode("Agradecimientos. "),1,1,'la');


  $pdf->SetXY(155,104);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,104);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,109);
  $pdf->Cell(135,5, utf8_decode("Resumen. "),1,1,'la');


  $pdf->SetXY(155,109);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,109);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,114);
  $pdf->Cell(135,5, utf8_decode("Índice."),1,1,'la');


  $pdf->SetXY(155,114);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,114);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');




  $pdf->SetXY(20,119);
  $pdf->Cell(135,5, utf8_decode("Introducción. "),1,1,'la');


  $pdf->SetXY(155,119);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,119);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,124);
  $pdf->Cell(135,5, utf8_decode("Problemas a resolver, priorizándolos. "),1,1,'la');


  $pdf->SetXY(155,124);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,124);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,129);
  $pdf->Cell(135,5, utf8_decode("Objetivos y Justificación. "),1,1,'la');


  $pdf->SetXY(155,129);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,129);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');
  
  

  $pdf->SetXY(20,134);
  $pdf->Cell(135,5, utf8_decode("Marco teórico (fundamentos teóricos) "),1,1,'la');


  $pdf->SetXY(155,134);
  $pdf->Cell(15,5, utf8_decode("     10"),1,1,'la');

  $pdf->SetXY(170,134);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');




  $pdf->SetXY(20,139);
  $pdf->Cell(135,5, utf8_decode("Procedimiento y descripción de las actividades realizadas. "),1,1,'la');


  $pdf->SetXY(155,139);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,139);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,144);
  $pdf->Cell(135,20, utf8_decode(""),1,1,'la');
  $pdf->SetXY(20,144);
  $pdf->Cell(135,20, utf8_decode(" "),0,0,'la');


  $pdf->SetXY(155,144);
  $pdf->Cell(15,20, utf8_decode("     45"),1,1,'la');

  $pdf->SetXY(170,144);
  $pdf->Cell(20,20, utf8_decode(""),1,1,'la');
  $pdf->SetXY(21,144);
  $pdf->MultiCell(130,5, utf8_decode("Resultados, planos, gráficas, prototipos, manuales, programas, análisis estadísticos, modelos matemáticos, simulaciones, normativas, regulaciones y restricciones, entre otros. Solo para proyectos que por su naturaleza lo requieran: estudio de mercado, estudio técnico y estudio económico.** "));



  




$pdf->SetXY(20,164);
  $pdf->Cell(135,5, utf8_decode("Conclusiones, recomendaciones y experiencia profesional adquirida. "),1,1,'la');


$pdf->SetXY(155,164);
  $pdf->Cell(15,5, utf8_decode("     15"),1,1,'la');

  $pdf->SetXY(170,164);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,169);
  $pdf->Cell(135,5, utf8_decode("Competencias desarrolladas y/o aplicadas. "),1,1,'la');


  $pdf->SetXY(155,169);
  $pdf->Cell(15,5, utf8_decode("       3"),1,1,'la');

  $pdf->SetXY(170,169);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,174);
  $pdf->Cell(135,5, utf8_decode("Fuentes de información "),1,1,'la');


  $pdf->SetXY(155,174);
  $pdf->Cell(15,5, utf8_decode("       2"),1,1,'la');

  $pdf->SetXY(170,174);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetFont('Arial','B',10);
  $pdf->SetXY(20,179);
  $pdf->Cell(135,5, utf8_decode("Calificación total "),1,1,'la');


  $pdf->SetXY(155,179);
  $pdf->Cell(15,5, utf8_decode("    100"),1,1,'la');

  $pdf->SetXY(170,179);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



$pdf->SetFont('Arial','',10);

$pdf->SetXY(15,189);
  $pdf->Cell(0,5, utf8_decode("Observaciones:"),0,1,'la');
  $pdf->SetXY(40,189);
  $pdf->Cell(0,5, utf8_decode("____________________________________________________________________________"),0,1,'la');

   $pdf->SetXY(15,196);
  $pdf->Cell(0,5, utf8_decode("_________________________________________________________________________________________"),0,1,'la');



  $pdf->SetXY(15,203);
  $pdf->Cell(0,5, utf8_decode("_________________________________________________________________________________________"),0,1,'la');




$sql2="SELECT empresa.AsesorE  FROM empresa, asignacionempresa WHERE asignacionempresa.no_controle = empresa.no_control AND asignacionempresa.no_control ='$no_control'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {

  $asesorcontar  = strlen($row2['AsesorE']);
  if ($asesorcontar > 0 and $asesorcontar <= 30) {
  $pdf->SetXY(15, 218);
  $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(16, 237);
  $pdf->MultiCell(55,4,  utf8_decode($row2['AsesorE']), 0, 'C', 0);
  }
  if ($asesorcontar > 30 ) {
    $pdf->SetXY(15, 218);
    $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
    $pdf->SetXY(16, 235);
    $pdf->MultiCell(55,4,  utf8_decode($row2['AsesorE']), 0, 'C', 0);
    }

  $pdf->SetXY(74, 218);
  $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(74, 227);
  $pdf->Cell(59,25,  utf8_decode("Sello de la empresa"),0,0,'C');

  $pdf->SetXY(133, 218);
  $pdf->Cell(57,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(133, 227);
  $pdf->Cell(57,25,  utf8_decode("Fecha de evaluación"),0,0,'C');

// solo imagina lo precioso que podria ser arriesgarte y que te salga bien
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15, 99);
  $pdf->Cell(5,85,  utf8_decode(""),1,1,'la');



}




$pdf->AddPage();
//TABLA DOS
$pdf->SetFont('Arial','B',11);
  $pdf->SetXY(15, 38);
   $pdf->Cell(0,5, utf8_decode("FORMATO DE EVALUACIÓN Y SEGUIMIENTO DE RESIDENCIA PROFESIONAL"),0,1,'C'); 
  $pdf->Ln();
  $sql="SELECT proyectos.nombreP , proyectos.periodop , proyectos.fechatermino, proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoInicio, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoTermino FROM proyectos, asignacionproyecto WHERE asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control ='$no_control'";

  $rec = $mysqli->query($sql);
   while($row=mysqli_fetch_array($rec))
   {
 
   
   
 $pdf->SetFont('Arial','',10);
   $pdf->SetXY(15,43);
   $pdf->Cell(0,5, utf8_decode("Nombre del Residente:"),0,1,'la');
   $pdf->SetXY(52, 44);
   $pdf->MultiCell(78,3,  utf8_decode($nombre));
   $pdf->SetXY(140,43);
   $pdf->Cell(0,5, utf8_decode("Número de  Control:"),0,1,'la');
   $pdf->SetXY(172, 43);
   $pdf->Cell(0,5,  utf8_decode($no_control),0,0,'la');
 
   $contarproyecto = strlen($row['nombreP']);
   
 
   if ($contarproyecto >= 0 and $contarproyecto <= 80) {
     $pdf->SetXY(15,47);
     $pdf->Cell(0,5, utf8_decode("Nombre del Proyecto:"),0,1,'la');
     $pdf->SetXY(50, 47.5);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(140,3, utf8_decode( trim($row['nombreP'])) );
     $pdf->SetXY(15,57.5);
     $pdf->SetFont('Arial','',10);
     $pdf->Cell(75,5, utf8_decode("Programa Educativo:"),0,1,'la');
     $pdf->SetXY(49, 57.5);
     $pdf->Cell(0,5,  utf8_decode($carrera),0,0,'la');
     $pdf->SetXY(15,66);
     $pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional:"),0,1,'la');
     $pdf->SetXY(98, 66);
     //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');
     $pdf->Cell(0,5,  utf8_decode($row['DiaInicio']." de   ".$row['MesInicio']." de   ".$row['AnoInicio']." al    ".$row['DiaTermino']." de   ".$row['MesTermino']." de   ".$row['AnoTermino']),0,0,'la');
     $pdf->SetXY(15,76);
     $pdf->Cell(0,5, utf8_decode("Calificación Final (promedio de ambas evaluaciones):"),0,1,'la');
     $pdf->SetXY(103,76);
     $pdf->Cell(0,5, utf8_decode("____________________________________________"),0,0,'la');
     }
 
   if ($contarproyecto > 80) {
   $pdf->SetXY(15,48);
   $pdf->Cell(0,5, utf8_decode("Nombre del Proyecto:"),0,1,'la');
   $pdf->SetXY(50, 48.5);
   $pdf->SetFont('Arial','B',10);
   $pdf->MultiCell(140,4, utf8_decode( trim($row['nombreP'])) );
   $pdf->SetXY(15,66.5);
   $pdf->SetFont('Arial','',10);
   $pdf->Cell(75,5, utf8_decode("Programa Educativo:"),0,1,'la');
   $pdf->SetXY(49, 66.5);
   $pdf->Cell(0,5,  utf8_decode($carrera),0,0,'la');
   $pdf->SetXY(15,74);
   $pdf->Cell(0,5, utf8_decode("Periodo de realización de la Residencia Profesional:"),0,1,'la');
   $pdf->SetXY(98, 74);
   //$pdf->Cell(0,5,  utf8_decode($row['periodop']." al  ".$row['fechatermino']),0,0,'la');
   $pdf->Cell(0,5,  utf8_decode($row['DiaInicio']." de   ".$row['MesInicio']." de   ".$row['AnoInicio']." al    ".$row['DiaTermino']." de   ".$row['MesTermino']." de   ".$row['AnoTermino']),0,0,'la');
   }} 

  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15,83);
  $pdf->CellFitSpace(0,5, utf8_decode("                                           En qué medida el residente cumple con lo siguiente"),1,1,'L');
  
  
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15, 93);
  $pdf->Cell(5,85,  utf8_decode(""),1,1,'la');

  
  
  $pdf->SetXY(15,88);
  $pdf->Cell(140,5, utf8_decode("                                                   Criterios a evaluar"),1,1,'la');

  $pdf->SetXY(155,88);
  $pdf->Cell(15,5, utf8_decode("Valor"),1,1,'la');

  $pdf->SetXY(170,88);
  $pdf->Cell(20,5, utf8_decode("Evaluación"),1,1,'la');


  $pdf->SetXY(20,93);
  $pdf->Cell(135,5, utf8_decode("Portada."),1,1,'la');


  $pdf->SetXY(155,93);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,93);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,98);
  $pdf->Cell(135,5, utf8_decode("Agradecimientos. "),1,1,'la');


  $pdf->SetXY(155,98);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,98);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,103);
  $pdf->Cell(135,5, utf8_decode("Resumen. "),1,1,'la');


  $pdf->SetXY(155,103);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,103);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,108);
  $pdf->Cell(135,5, utf8_decode("Índice."),1,1,'la');


  $pdf->SetXY(155,108);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,108);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,113);
  $pdf->Cell(135,5, utf8_decode("Introducción. "),1,1,'la');


  $pdf->SetXY(155,113);
  $pdf->Cell(15,5, utf8_decode("      2"),1,1,'la');

  $pdf->SetXY(170,113);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');




  $pdf->SetXY(20,118);
  $pdf->Cell(135,5, utf8_decode("Problemas a resolver, priorizándolos. "),1,1,'la');


  $pdf->SetXY(155,118);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,118);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');



  $pdf->SetXY(20,123);
  $pdf->Cell(135,5, utf8_decode("Objetivos y Justificación. "),1,1,'la');


  $pdf->SetXY(155,123);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,123);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');
 
  

  $pdf->SetXY(20,128);
  $pdf->Cell(135,5, utf8_decode("Marco teórico (fundamentos teóricos) "),1,1,'la');


  $pdf->SetXY(155,128);
  $pdf->Cell(15,5, utf8_decode("     10"),1,1,'la');

  $pdf->SetXY(170,128);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');
 


  $pdf->SetXY(20,133);
  $pdf->Cell(135,5, utf8_decode("Procedimiento y descripción de las actividades realizadas. "),1,1,'la');


  $pdf->SetXY(155,133);
  $pdf->Cell(15,5, utf8_decode("      5"),1,1,'la');

  $pdf->SetXY(170,133);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,138);
  $pdf->Cell(135,20, utf8_decode(""),1,1,'la');
  $pdf->SetXY(20,131);
  $pdf->Cell(135,20, utf8_decode("Resultados, planos, gráficas, prototipos, manuales, programas, análisis estadísticos, "),0,0,'la');


  $pdf->SetXY(155,138);
  $pdf->Cell(15,20, utf8_decode("     45"),1,1,'la');

  $pdf->SetXY(170,138);
  $pdf->Cell(20,20, utf8_decode(""),1,1,'la');

  $pdf->SetXY(20,144);
  $pdf->Cell(135,5, utf8_decode("modelos matemáticos, simulaciones, normativas, regulaciones y restricciones,    "),0,0,'la');

  $pdf->SetXY(20,148);
  $pdf->Cell(135,5, utf8_decode("entre otros. Solo para proyectos que por su naturaleza lo requieran:"),0,0,'la');


  $pdf->SetXY(20,153);
  $pdf->Cell(135,5, utf8_decode("estudio de mercado, estudio técnico y estudio económico.**"),0,0,'la');




$pdf->SetXY(20,158);
  $pdf->Cell(135,5, utf8_decode("Conclusiones, recomendaciones y experiencia profesional adquirida. "),1,1,'la');


$pdf->SetXY(155,158);
  $pdf->Cell(15,5, utf8_decode("      15"),1,1,'la');

  $pdf->SetXY(170,158);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,163);
  $pdf->Cell(135,5, utf8_decode("Competencias desarrolladas y/o aplicadas. "),1,1,'la');


  $pdf->SetXY(155,163);
  $pdf->Cell(15,5, utf8_decode("       3"),1,1,'la');

  $pdf->SetXY(170,163);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetXY(20,168);
  $pdf->Cell(135,5, utf8_decode("Fuentes de información "),1,1,'la');


  $pdf->SetXY(155,168);
  $pdf->Cell(15,5, utf8_decode("       2"),1,1,'la');

  $pdf->SetXY(170,168);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


  $pdf->SetFont('Arial','B',10);
  $pdf->SetXY(20,173);
  $pdf->Cell(135,5, utf8_decode("Calificación total "),1,1,'la');


  $pdf->SetXY(155,173);
  $pdf->Cell(15,5, utf8_decode("    100"),1,1,'la');

  $pdf->SetXY(170,173);
  $pdf->Cell(20,5, utf8_decode(""),1,1,'la');


$pdf->SetFont('Arial','',10);

$pdf->SetXY(15,181);
  $pdf->Cell(0,5, utf8_decode("Observaciones:"),0,1,'la');
  $pdf->SetXY(40,181);
  $pdf->Cell(0,5, utf8_decode("____________________________________________________________________________"),0,1,'la');

   $pdf->SetXY(15,188);
  $pdf->Cell(0,5, utf8_decode("_________________________________________________________________________________________"),0,1,'la');

  $pdf->SetXY(15,195);
  $pdf->Cell(0,5, utf8_decode("_________________________________________________________________________________________"),0,1,'la');



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

 

    $asesorintcontar  = strlen($row2A['NombreAS']);
    if ($asesorintcontar > 0 and $asesorintcontar <= 32) {

  $pdf->SetXY(15, 208);
  $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(16, 226);
  $pdf->MultiCell(55,3,  utf8_decode($row2A['NombreAS']),0,'C',0);
}
if ($asesorintcontar > 32 and $asesorintcontar <= 100) {

  $pdf->SetXY(15, 208);
  $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(16, 226);
  $pdf->MultiCell(55,3,  utf8_decode($row2A['NombreAS']),0,'C',0);

}

  $pdf->SetXY(74, 208);
  $pdf->Cell(59,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(74, 218);
  $pdf->Cell(59,25,  utf8_decode("Sello de la institución"),0,0,'C');

  $pdf->SetXY(133, 208);
  $pdf->Cell(57,25,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(133, 218);
  $pdf->Cell(57,25,  utf8_decode("Fecha de evaluación"),0,0,'C');



}
}



if ($total =='2') {

$sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


while($dNA = mysqli_fetch_assoc($sqlNA))  {$dataNA[] = $dNA;}

$nNA_1 = $dataNA[0]['IdAS'];
$nNA_2 = $dataNA[1]['IdAS'];





  $sql2A="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

 $rec2A = $mysqli->query($sql2A);
  while($row2A=mysqli_fetch_array($rec2A))
  {

 


  $pdf->SetXY(15, 190);
  $pdf->Cell(59,35,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 220);
  $pdf->MultiCell(57,3,  utf8_decode($row2A['NombreAS']));


  $pdf->SetXY(74, 190);
  $pdf->Cell(59,35,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(88, 2077);
  $pdf->Cell(57,25,  utf8_decode("Sello de la institución"),0,0,'la');

  $pdf->SetXY(133, 190);
  $pdf->Cell(57,35,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(146, 207);
  $pdf->Cell(57,25,  utf8_decode("Fecha de evaluación"),0,0,'la');

/*
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15, 60);
  $pdf->Cell(5,85,  utf8_decode(""),1,1,'la');
*/
}


$sql2AA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_2' ";

 $rec2AA = $mysqli->query($sql2AA);
  while($row2AA=mysqli_fetch_array($rec2AA))
  {

 


  $pdf->SetXY(15, 190);
  $pdf->Cell(59,35,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 205);
  $pdf->MultiCell(57,3,  utf8_decode($row2AA['NombreAS']));


  

}
}


if ($total =='3') {

$sqlNA = $mysqli->query("SELECT numerodeasesores.IdAS from numerodeasesores WHERE numerodeasesores.IdAS4 ='$numeroproyecto3'");


while($dNA = mysqli_fetch_assoc($sqlNA))  {$dataNA[] = $dNA;}

$nNA_1 = $dataNA[0]['IdAS'];
$nNA_2 = $dataNA[1]['IdAS'];
$nNA_3 = $dataNA[1]['IdAS'];




  $sql2A="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_1' ";

 $rec2A = $mysqli->query($sql2A);
  while($row2A=mysqli_fetch_array($rec2A))
  {

 


  $pdf->SetXY(15, 180);
  $pdf->Cell(59,45,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 220);
  $pdf->MultiCell(57,3,  utf8_decode($row2A['NombreAS']));


  $pdf->SetXY(74, 180);
  $pdf->Cell(59,45,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(88, 206);
  $pdf->Cell(57,25,  utf8_decode("Sello de la institución"),0,0,'la');

  $pdf->SetXY(133, 180);
  $pdf->Cell(57,45,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(146, 206);
  $pdf->Cell(57,25,  utf8_decode("Fecha de evaluación"),0,0,'la');


  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(15, 60);
  $pdf->Cell(5,85,  utf8_decode(""),1,1,'la');

}


$sql2AA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_2' ";

 $rec2AA = $mysqli->query($sql2AA);
  while($row2AA=mysqli_fetch_array($rec2AA))
  {

 


  $pdf->SetXY(15, 180);
  $pdf->Cell(59,45,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 205);
  $pdf->MultiCell(57,3,  utf8_decode($row2AA['NombreAS']));


  

}


$sql2AAA="SELECT  *  FROM  asesor WHERE IdAS  ='$nNA_2' ";

 $rec2AAA = $mysqli->query($sql2AAA);
  while($row2AAA=mysqli_fetch_array($rec2AAA))
  {

 


  $pdf->SetXY(15, 180);
  $pdf->Cell(59,45,  utf8_decode(""),1,1,'la');
  $pdf->SetXY(15, 190);
  $pdf->MultiCell(57,3,  utf8_decode($row2AAA['NombreAS']));


  

}



}


 $pdf->Output();
  
 ?>